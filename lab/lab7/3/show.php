<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .info{
            width: 50%;
            margin: 0 auto;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <?php
        echo "<h1>Member Register</h1>";
        echo "<div class='info'>";
        echo "<p>Name : ".$_POST['name']."</p>";
        echo "<p>Address : ".$_POST['address']."</p>";
        echo "<p>Age : ".$_POST['age']."</p>";
        echo "<p>Profession : ".$_POST['profession']."</p>";
        echo "<p>Status : ".$_POST['status1']."</p>";
        echo "</div>";
    ?>
</body>
</html>