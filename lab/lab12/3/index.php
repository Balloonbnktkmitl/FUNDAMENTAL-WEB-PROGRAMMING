<?php
// web service URL 
    $url = "http://10.0.15.21/lab/lab12/restapis/products.php?list=10";   
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    $dataPoints = [];
    foreach ($data as $item) {
        $dataPoints[] = array(
            "label" => $item['ProductCode'], // Assuming 'ProductName' is the label
            "y" => $item['UnitPrice'] // Assuming 'UnitPrice' is the price
        );
    }
    $datalas = json_encode($dataPoints, JSON_NUMERIC_CHECK);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab12.3</title>
    <script>
        window.onload = function() {
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Price of Products"
                },
                axisY: {
                    title: "UnitPrice (in THB)",
                    includeZero: true,
                    prefix: "",
                    maximum: 60
                },
                data: [{
                    type: "column",
                    yValueFormatString: "#",
                    indexLabel: "{y}",
                    indexLabelPlacement: "inside",
                    indexLabelFontWeight: "bolder",
                    indexLabelFontColor: "white",
                    dataPoints: <?php echo $datalas; ?>
                }]
            });
            chart.render();
        }
    </script>
</head>
<body>
    <div id="chartContainer" style="height: 450px; width: 80%;"></div>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>
