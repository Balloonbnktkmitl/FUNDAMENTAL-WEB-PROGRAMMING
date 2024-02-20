<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>save</title>
</head>
<body>
<?php
    $c_id = $_GET['CourseID'];
    $c_title = $_GET['CourseTitle'];
    $c_dept = $_GET['DeptName'];
    $c_credits = $_GET['Credits'];
    echo "$c_id / $c_title / $c_dept / $c_credits " ;
    // SQL INSERT INTO statement
    // 
    $servername = "localhost";
    $username = "root"; //ตามที่กำหนดให้
    $password = ""; //ตามที่กำหนดให้
    $dbname = "s021n";    //ตามที่กำหนดให้
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO course (course_id, title, dept_name, credit)
    VALUES ('$c_id', '$c_title', '$c_dept', '$c_credits')";
    if (mysqli_query($conn, $sql)) {
        echo "<br>New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

    mysqli_close($conn);
?>
</body>
</html>