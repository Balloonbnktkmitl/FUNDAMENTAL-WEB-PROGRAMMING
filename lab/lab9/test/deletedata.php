<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Del</title>
</head>
<body>
<?php
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
    // close connection
    $c_id = $_GET['CourseID'];
    echo "$c_id";
    // SQL statement
    $sql = "DELETE FROM course WHERE course_id = '$c_id'";
    // DELETE FROM table_name
    // WHERE some_column = some_value 
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . mysqli_error($conn);
      }
    // close connection
    mysqli_close($conn);
?>
</body>
</html>