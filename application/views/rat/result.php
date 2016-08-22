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
				title: "Poor(Red) <= 50 | 50 < Moderate(Yellow) <= 80 | Satisfactory(Blue) > 80",
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
<button class="btn btn-default" onclick="goBack()">Go Back</button>
<button class="btn btn-default" onclick="printChart()">Print</button>
<br class="clearboth">
<hr>
<br/>
<div id="section-to-print-data">
	<div class="tables_container">
		<table border=1 class="table_result">
			<thead>
				<tr>
					<th>Construction/ Containment</th>
				</tr>
			</thead>
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
		<table border=1 class="table_result" id="right_table">
			<thead>
				<tr>
					<th> Collection & Transportation </th>
				</tr>
			</thead>
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
		<table border=1 class="table_result">
			<thead>
				<tr>
					<th> Treatment/ Disposa/ Reuse </th>
				</tr>
			</thead>
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
		<table border=1 class="table_result" id="right_table">
			<thead>
				<tr>
					<th> Other activites </th>
				</tr>
			</thead>
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
			<thead>
				<tr>
					<th> Affortability </th>
				</tr>
			</thead>
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
			<thead>
				<tr>
					<th> Priority </th>
				</tr>
			</thead>
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
	</div>
</div>
<br class="clearboth">
