<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test2</title>
</head>
<body>
    <form action="" method="POST">
        <label for="prodid">Product ID :</label>
        <input type="text" id="prodid" name="prodid" placeholder="Enter a Product ID (1-30)" required />
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    if(isset($_POST['submit']))
    {
    $prodid = $_POST['prodid'];        
    $url = "http://10.0.15.21/lab/lab12/restapis/products.php?prodid=" . $prodid;
    $client = curl_init($url);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($client);   
    $result = json_decode($response);
    echo "Product ID: " . $result[0]->ProductID . " <br>"; 
    echo "Product Name: " . $result[0]->ProductName . " <br>"; 
    echo "Product Des: " . $result[0]->Description . " <br>"; 
    echo "Product Price: " . $result[0]->UnitPrice . " <br>"; 
    echo "Product Code: " . $result[0]->ProductCode . " <br>"; 
    } ?>
</body>
</html>