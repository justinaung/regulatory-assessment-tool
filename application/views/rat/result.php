<script type='text/javascript' src="<?php echo base_url(); ?>assets/js/canvasjs.min.js"></script>
<script type="text/javascript">
	var construction_data = <?php echo json_encode($con_result); ?>;
	var collection_data = <?php echo json_encode($col_result); ?>;
	var treatment_data = <?php echo json_encode($treat_result); ?>;
	var whole_data = <?php echo json_encode($whole_result); ?>;

	var construction_color = getColor(construction_data);
	var collection_color = getColor(collection_data);
	var treatment_color = getColor(treatment_data);
	var whole_color = getColor(whole_data);

	var construction_result = getResult(construction_data);
	var collection_result = getResult(collection_data);
	var treatment_result = getResult(treatment_data);
	var whole_result = getResult(whole_data);

	window.onload = function ()
	{
		var chart = new CanvasJS.Chart("chartContainer",
		{
			title:
			{
				text: "FSM Regulation Effectiveness Assessment Chart"
			},
			axisY:
			{
				title: "Poor <= 50 | 50 < Moderate <= 80 | Satisfactory > 80",
				titleFontSize: 15,
				maximum: 100
			},
			data:
			[
				{
					// Change type to "doughnut", "line", "splineArea", etc.
					type: "bar",
					toolTipContent: "{label} : {result}({y})",
					dataPoints:
					[
						{ label: "Overall", y: whole_data, color: whole_color,
			 		      result: whole_result },

						{ label: "Construction/Containment",  y: construction_data,
				 		  color: construction_color, result: construction_result },

						{ label: "Collection/Transportation",  y: collection_data,
				 		  color: collection_color, result: collection_result },

						{ label: "Treatment/Disposal/Reuse",  y: treatment_data,
				 		  color: treatment_color, result: treatment_result }
					]
				}
			]
		});
		chart.render();
	}

	function getResult(data)
	{
		if (data >=0 && data <= 50)
		{
			return "Poor";
		}
		else if (data > 50 && data <= 80)
		{
			return "Moderate";
		}
		else if (data > 80 && data <= 100)
		{
			return "Satisfactory";
		}
	}

	function getColor(data)
	{
		if (data >=0 && data <= 50)
		{
			return "#E74C3C";
		}
		else if (data > 50 && data <= 80)
		{
			return "#F5B041";
		}
		else if (data > 80 && data <= 100)
		{
			return "#5499C7";
		}
	}

	function goBack()
 	{
    	window.history.back()
	}

	function printChart()
	{
		window.print();
	}

</script>

<style>

@media print
{
	body *
	{
		visibility: hidden;
	}
	#section-to-print-chart, #section-to-print-chart *,
	#section-to-print-data, #section-to-print-data *
	{
		visibility: visible;
	}
	#section-to-print-chart
	{
		position: absolute;
		left: 0;
		top: 0;
	}
	#section-to-print-data
	{
		position: absolute;
		left: 100px;
		top: 320px;
	}

}
.printing
{
  font-size:40px;
}
</style>
<div align="center" id="section-to-print-chart">
	<div id="chartContainer" style="height: 300px; width: 70%;"></div>
</div>
<br class="clearboth">
<div class="row" align="center">
	<label id="poor_ind"> Poor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><label id="mod_ind" > Moderate&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><label id="sat_ind"> Satisfactory&nbsp;&nbsp;&nbsp;</label>
</div>
<button class="btn btn-default" onclick="goBack()">Go Back</button>
<button id="printButton" class="btn btn-info" style="float: left;" onclick="printChart()">Print Result</button>
<br class="clearboth">
<hr>
<br/>
<div id="section-to-print-data">
	<div class="contain-fluid">
		<h4 align="center"> Missing Criteria </h4><br>
		<div class="row">
			<div class="col-xs-12">
				<table border=1 class="datatable table table-condensed table-bordered">
					<thead>
						<tr>
							<th>Construction/ Containment</th>
							<th>Collection & Transportation</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="width50">
								<table class="datatable table table-condensed">
                                    <tbody>
										<?php
											foreach ($missed_construction_array as $value)
											{ ?>
												<tr>
													<?php
														echo "<td> - ".$value."</td>";
													?>
												</tr>
										<?php } ?>
										<?php
											foreach ($missed_con2_array as $value)
											{ ?>
												<tr>
													<?php
														echo "<td> - ".$value."</td>";
													?>
												</tr>
										<?php } ?>
									</tbody>
								</table>
							</td>
							<td class="width50">
								<table class="datatable table table-condensed">
                                    <tbody>
										<?php
								            foreach ($missed_collection_array as $value)
								            { ?>
								                <tr>
								                    <?php
								                        echo "<td> - ".$value."</td>";
								                    ?>
								                </tr>
								        <?php } ?>
								        <?php
								            foreach ($missed_col2_array as $value)
								            { ?>
								                <tr>
								                    <?php
								                        echo "<td> - ".$value."</td>";
								                    ?>
								                </tr>
								        <?php } ?>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
	 	</div>
		<div class="row">
			<div class="col-xs-12">
				<table border=1 class="datatable table table-condensed table-bordered">
					<thead>
						<tr>
							<th>Treatment/Disposal/Reuse</th>
							<th>Other Activities(Awareness, Education, Management)</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="width50">
								<table class="datatable table table-condensed">
                                    <tbody>
										<?php
								            foreach ($missed_treatment_array as $value)
								            { ?>
								                <tr>
								                    <?php
								                        echo "<td> - ".$value."</td>";
								                    ?>
								                </tr>
								        <?php } ?>
								        <?php
								            foreach ($missed_treat2_array as $value)
								            { ?>
								                <tr>
								                    <?php
								                        echo "<td> - ".$value."</td>";
								                    ?>
								                </tr>
								        <?php } ?>
									</tbody>
								</table>
							</td>
							<td class="width50">
								<table class="datatable table table-condensed">
                                    <tbody>
										<?php
								            foreach ($missed_act_array as $value)
								            { ?>
								                <tr>
								                    <?php
								                        echo "<td> - ".$value."</td>";
								                    ?>
								                </tr>
								        <?php } ?>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
	 	</div>
		<div class="row">
			<div class="col-xs-12">
				<table border=1 class="datatable table table-condensed table-bordered">
					<thead>
						<tr>
							<th>Affordability to Pay</th>
							<th>Priority</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="width50">
								<table class="datatable table table-condensed">
                                    <tbody>
										<?php
								            foreach ($missed_aff_array as $value)
								            { ?>
								                <tr>
								                    <?php
								                        echo "<td> - ".$value."</td>";
								                    ?>
								                </tr>
								        <?php } ?>
									</tbody>
								</table>
							</td>
							<td class="width50">
								<table class="datatable table table-condensed">
                                    <tbody>
										<?php
								            foreach ($missed_prio_array as $value)
								            { ?>
								                <tr>
								                    <?php
								                        echo "<td> - ".$value."</td>";
								                    ?>
								                </tr>
								        <?php } ?>
									</tbody>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
	 	</div>
	</div>
</div>
<br class="clearboth">
