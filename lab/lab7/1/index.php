<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sudkoon</title>
    <style>
        h1{
            color: red;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <label>Input Number: </label>
        <input type="text" name="invalue" id="invalue">
        <button type='submit' >Showtable</button>
    </form>
    <?php
        if (isset($_POST['invalue'])) {
            $number = $_POST['invalue'];
            $v = intval($number);
            echo "<h1> ตารางสูตรคูณแม่ " . $v . "</h1>";
            for ($i = 1; $i <= 12; $i++) {
                echo $v . " x " . $i . " = " .  $v*$i . "<br>";
            }
        }
    ?>
</body>
</html>