<script type='text/javascript' src="<?php echo base_url(); ?>js/canvasjs.min.js"></script>
<?php
	var_dump($_POST);
?>
<script type="text/javascript">
	var construction_data = <?php echo json_encode($con_result); ?>;
	var collection_data = <?php echo json_encode($col_result); ?>;
	var treatment_data = <?php echo json_encode($treat_result); ?>;
	var whole_data = <?php echo json_encode($whole_result); ?>;

	var construction_color = getColor(construction_data);
	var collection_color = getColor(collection_data);
	var treatment_color = getColor(treatment_data);
	var whole_color = getColor(whole_data);

	window.onload = function ()
	{
		var chart = new CanvasJS.Chart("chartContainer",
		{
			title:
			{
				text: "Regulatory Assessment Criteria"
			},
			axisY:
			{
				maximum: 100
			},
			data:
			[
				{
					// Change type to "doughnut", "line", "splineArea", etc.
					type: "bar",
					dataPoints:
					[
						{ label: "Overall", y: whole_data, color: whole_color },

						{ label: "Construction",  y: construction_data,
				 		  color: construction_color },

						{ label: "Collection",  y: collection_data,
				 		  color: collection_color },

						{ label: "Treatment",  y: treatment_data,
				 		  color: treatment_color }
					]
				}
			]
		});
		chart.render();
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
	#section-to-print, #section-to-print *
	{
		visibility: visible;
	}
	#section-to-print
	{
		position: absolute;
		left: 0;
		top: 0;
	}
}
.printing
{
  font-size:40px;
}

</style>

<div align="center" id="section-to-print">
	<div id="chartContainer" style="height: 300px; width: 70%;"></div>
</div>
<br class="clearboth">
<button class="btn btn-default" onclick="goBack()">Go Back</button>
<button class="btn btn-default" onclick="printChart()">Print Chart</button>
