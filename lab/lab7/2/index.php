<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap" rel="stylesheet">
    <style>
        body{
            display: flex;
            align-items: center;
            height: 100vh;
            font-family: 'Chakra Petch', sans-serif;
            font-size: 20px;
            flex-direction: column;
        }
        table, tr, td, th{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="containMonth">
            <label for="year">Calendar : </label>
            <select class="month" name="month" onchange="form.submit()">
            <?php
                foreach (array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December') as $monthName) {
                    $selected = ($monthName == $_POST['month'] ? 'selected' : '');
                    echo "<option value='$monthName' $selected>$monthName</option>";
                }
            ?>
            </select>
        </div>
    </form>

    <?php
    $jan = array("", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, "", "", "");
    $feb = array("", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, "", "");
    $mar = array("", "", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, "", "", "", "", "", "");
    $apr = array("", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, "", "", "", "");
    $may = array("", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, "");
    $jun = array("", "", "", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, "", "", "", "", "", "");
    $jul = array("", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, "", "", "");
    $aug = array("", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31);
    $sep = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, "", "", "", "", "");
    $oct = array("", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, "",  "");
    $nov = array("", "", "", "", "", 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30);
    $dec = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, "", "", "", "");
    if(isset($_POST['month'])){
        $month = $_POST['month'];
        if($month == "no"){
            echo "Please select month";
        }
        else{
            echo "<h1>Calendar of " . $month . " 2024 </h1>";
            echo "<table>";
            echo "<tr>";
            echo "<th>Sun</th>";
            echo "<th>Mon</th>";
            echo "<th>Tue</th>";
            echo "<th>Wed</th>";
            echo "<th>Thu</th>";
            echo "<th>Fri</th>";
            echo "<th>Sat</th>";
            echo "</tr>";
            if($month == "January"){
                for($i = 0; $i < 5; $i++){
                    echo "<tr>";
                    for($j = 0; $j < 7; $j++){
                        echo "<td>" . $jan[$i*7+$j] . "</td>";
                    }
                    echo "</tr>";
                }
            }
            else if($month == "February"){
                for($i = 0; $i < 5; $i++){
                    echo "<tr>";
                    for($j = 0; $j < 7; $j++){
                        echo "<td>" . $feb[$i*7+$j] . "</td>";
                    }
                    echo "</tr>";
                }
            }
            else if($month == "March"){
                for($i = 0; $i < 6; $i++){
                    echo "<tr>";
                    for($j = 0; $j < 7; $j++){
                        echo "<td>" . $mar[$i*7+$j] . "</td>";
                    }
                    echo "</tr>";
                }
            }
            else if($month == "April"){
                for($i = 0; $i < 5; $i++){
                    echo "<tr>";
                    for($j = 0; $j < 7; $j++){
                        echo "<td>" . $apr[$i*7+$j] . "</td>";
                    }
                    echo "</tr>";
                }
            }
            else if($month == "May"){
                for($i = 0; $i < 5; $i++){
                    echo "<tr>";
                    for($j = 0; $j < 7; $j++){
                        echo "<td>" . $may[$i*7+$j] . "</td>";
                    }
                    echo "</tr>";
                }
            }
            else if($month == "June"){
                for($i = 0; $i < 6; $i++){
                    echo "<tr>";
                    for($j = 0; $j < 7; $j++){
                        echo "<td>" . $jun[$i*7+$j] . "</td>";
                    }
                    echo "</tr>";
                }
            }
            else if($month == "July"){
                for($i = 0; $i < 5; $i++){
                    echo "<tr>";
                    for($j = 0; $j < 7; $j++){
                        echo "<td>" . $jul[$i*7+$j] . "</td>";
                    }
                    echo "</tr>";
                }
            }
            else if($month == "August"){
                for($i = 0; $i < 5; $i++){
                    echo "<tr>";
                    for($j = 0; $j < 7; $j++){
                        echo "<td>" . $aug[$i*7+$j] . "</td>";
                    }
                    echo "</tr>";
                }
            }
            else if($month == "September"){
                for($i = 0; $i < 5; $i++){
                    echo "<tr>";
                    for($j = 0; $j < 7; $j++){
                        echo "<td>" . $sep[$i*7+$j] . "</td>";
                    }
                    echo "</tr>";
                }
            }
            else if($month == "October"){
                for($i = 0; $i < 5; $i++){
                    echo "<tr>";
                    for($j = 0; $j < 7; $j++){
                        echo "<td>" . $oct[$i*7+$j] . "</td>";
                    }
                    echo "</tr>";
                }
            }
            else if($month == "November"){
                for($i = 0; $i < 5; $i++){
                    echo "<tr>";
                    for($j = 0; $j < 7; $j++){
                        echo "<td>" . $nov[$i*7+$j] . "</td>";
                    }
                    echo "</tr>";
                }
            }
            else if($month == "December"){
                for($i = 0; $i < 5; $i++){
                    echo "<tr>";
                    for($j = 0; $j < 7; $j++){
                        echo "<td>" . $dec[$i*7+$j] . "</td>";
                    }
                    echo "</tr>";
                }
            }
        }
    }
    ?>
</body>
</html>