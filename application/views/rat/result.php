<br><br>
<h2>Results</h2>
<br>

<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">
	var construction_data = <?php echo json_encode($con_result); ?>;
	var collection_data = <?php echo json_encode($col_result); ?>;
	var treatment_data = <?php echo json_encode($treat_result); ?>;
	var whole_data = <?php echo json_encode($whole_result); ?>;

	window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		title:{
			text: "Regulatory Assessment Criteria"
		},
		axisY:{
			maximum: 100
		},
		data: [
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "bar",
			dataPoints: [
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
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 70%;"></div>
</body>
</html>
