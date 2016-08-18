<br><br>
<h2>Results</h2>
<br>

<script type='text/javascript' src="<?php echo base_url(); ?>js/canvasjs.min.js"></script>

<script type="text/javascript">
	var construction_data = <?php echo json_encode($con_result); ?>;
	var collection_data = <?php echo json_encode($col_result); ?>;
	var treatment_data = <?php echo json_encode($treat_result); ?>;
	var whole_data = <?php echo json_encode($whole_result); ?>;

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
						{ label: "Overall",  y: whole_data },
						{ label: "Construction",  y: construction_data },
						{ label: "Collection",  y: collection_data },
						{ label: "Treatment",  y: treatment_data }
					]
				}
			]
		});
		chart.render();
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

<body>
	<button onclick="printChart()">Print Chart</button>
	<div id="section-to-print">
		<div id="chartContainer" style="height: 300px; width: 70%;"></div>
	</div>
	<br>
	<button onclick="goBack()">Go Back</button>
</body>

<!--
<div class="test">
Testing
<div id="section-to-print">

 <div class="text-primary">
	Test Tesing Testing
 </div>
 <h1 style="color:green;">Print me</h1>
 <img src="https://encrypted-tbn2.gstatic.com/images?       q=tbn:ANd9GcTxGnSWBjZPbzj6IUq0IgEO1vqT4QFpcfejmHWRWDnLV862lvz-"/>
</div>
</div>
<button onclick="printDiv()">
Print</button> -->
