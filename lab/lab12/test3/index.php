<?php
// web service URL 
    $url = "http://10.0.15.21/lab/lab12/restapis/ws-for-barchart.php";   
    $response = file_get_contents($url);
    $dataPoints = $response;
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test3</title>
    <script>
        window.onload = function() {
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "Revenue Chart of Cricket Hotel"
                },
                axisY: {
                    title: "Revenue (in THB)",
                    includeZero: true,
                    prefix: "",
                    suffix: "M"
                },
                data: [{
                    type: "column",
                    yValueFormatString: "#,##0M",
                    indexLabel: "{y}",
                    indexLabelPlacement: "inside",
                    indexLabelFontWeight: "bolder",
                    indexLabelFontColor: "white",
                    dataPoints: <?php echo $dataPoints; ?>
                }]
            });
            chart.render();
        }
    </script>
</head>
<body>
    <div id="chartContainer" style="height: 450px; width: 80%;"></div>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

    <!-- <?php
        $url = "https://covid19.ddc.moph.go.th/api/Cases/today-cases-all";
        $response = file_get_contents($url);
        $result = json_decode($response);

        echo "ปี : ". $result[0]->year." <br>";
        echo "สัปดาห์ที่ : ". $result[0]->weeknum ."<br>";
        echo "ผู้ป่วยใหม่ :  " .$result[0]->new_case ."<br>";
        echo "ผู้ป่วยทั้งหมด :  ". $result[0]->total_case ."<br>";
        echo "คนตาย :  " .$result[0]->total_death ."<br>";
        
    ?>  -->
    <!-- <?php
        $url = "http://10.0.15.21/lab/lab12/restapis/heroes";    
        $response = file_get_contents($url);
        $result = json_decode($response);
    
        echo "Squad Name : ". $result->squadName."<br>";
        echo "Home Town : ". $result->homeTown."<br>";    
        foreach ($result->members as $hero) {  
            echo "&emsp; Name : $hero->name<br>";
            echo "&emsp; Age : $hero->age<br>";
            foreach ($hero->powers as $power) {
                echo "&emsp; Power : $power<br>";
            }        
            echo "<br>";    
        }
    ?> -->

</body>
</html>