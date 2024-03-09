<?php
    $url = "http://10.0.15.21/lab/lab12/restapis/products.php";
    $response = file_get_contents($url);
    $result = json_decode($response);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Lab12.2</title>
</head>
<body>
    <div class="container">
        <h1>Product Details</h1>
        <div class="card">
            <div class="card-body">
                <div>
                    <?php
                    $productnow = isset($_GET['pn']) ? (int)$_GET['pn'] : 1;
                    echo "<p>Product ID: " . $result[$productnow-1]->ProductID . "</p>";
                    echo "<p>Product Code: " . $result[$productnow-1]->ProductCode . "</p>";
                    echo "<p>Product Name: " . $result[$productnow-1]->ProductName . "</p>";
                    echo "<p>Product Description: " . $result[$productnow-1]->Description . "</p>";
                    echo "<p>Product Price: " . $result[$productnow-1]->UnitPrice . "</p>";
                    ?>
                </div>
                <div>
                    <?php
                    if($productnow > 1)
                    {
                        echo "<a href='index.php?pn=" . ($productnow-1) . "' class='btn btn-primary mx-2'>Previous</a>";
                    }
                    if($productnow < 43)
                    {
                        echo "<a href='index.php?pn=" . ($productnow+1) . "' class='btn btn-primary'>Next</a>";
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</body>
</html>