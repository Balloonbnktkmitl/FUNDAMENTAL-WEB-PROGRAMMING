<?php
    $url = "http://10.0.15.21/lab/lab12/restapis/10countries.json";
    $response = file_get_contents($url);
    $result = json_decode($response);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Lab12.1</title>
</head>
<body>
    <div class="container">
        <?php
            foreach ($result as $country) {
                echo "<div class='card mb-5'>";
                echo "<div class='card-body d-flex flex-row gap-4 justify-content-between align-items-center'>";
                echo "<div class='p-3'>";
                echo "<h5 class='card-title'>Name :" . $country->name . "</h5>";
                echo "<p class='card-text'>Capital: " . $country->capital . "</p>";
                echo "<p class='card-text'>Population: " . $country->population . "</p>";
                echo "<p class='card-text'>Region: " . $country->region . "</p>";
                echo "<p class='card-text'>Location: ";
                foreach($country->latlng as $location){
                    echo $location . " ";
                }
                echo "</p>";
                echo "<p class='card-text'>Borders: ";
                foreach($country->borders as $border){
                    echo $border . " ";
                }
                echo "</p>";
                echo "</div>";
                echo "<div class='px-3'>";
                echo "<img src='" . $country->flag . "' style='width: 100%; max-width: 384px' alt='Flag'>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>