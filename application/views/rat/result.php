<br><br>
<h2>Results</h2>
<br>

<!-- <?php
    echo $con_result;
?> -->
<div id="dom-target" style="display: none;">
    <?php
        $output = $con_result; //Again, do some operation, get the output.
        echo htmlspecialchars($output); /* You have to escape because the result
                                           will not be valid HTML otherwise. */
    ?>
</div>
<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">
	var div = document.getElementById("dom-target");
	var myData = parseInt(div.textContent);
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
				{ label: "Overall",  y: 10 },
				{ label: "Construction",  y: myData },
				{ label: "Collection",  y: 20 },
				{ label: "Treatment",  y: 5 },
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
