<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab9</title>
</head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #4CAF50;
        color: white;
    }
</style>
<body>

    <!-- <table>
        <tr>
            <th>Course ID</th>
            <th>Course Title</th>
            <th>Dept. Name</th>
            <th>Year</th>
            <th>Semester</th>
            <th>Building</th>
        </tr> -->
    
    <!-- <?php
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
    $sql = "SELECT * FROM course;";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        echo " " . $row["course_id"]. " " . $row["title"]. 
        " " . $row["dept_name"] . " " . $row["credit"] . "<br>";
      }
    } else {
      echo "0 results";
    }

    // close connection
    mysqli_close($conn);
    ?> -->

    <!-- <?php
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
    $sql = "SELECT course_id, title, dept_name, year, semester, building  
    FROM course
    JOIN section
    USING (course_id)
    ";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>" . "<td>" . $row["course_id"]. "</td>" . "<td>" . $row["title"]. "</td>" . "<td>"  
        . $row["dept_name"] . "</td><td> " 
        . $row["year"] . "</td>" . "<td>" . $row["semester"] . "</td>" . "<td>" . $row["building"] ."</td>" . "</tr>";
      }
      echo "</table>";
    } else {
      echo "0 results";
    }

    // close connection
    mysqli_close($conn);
    ?> -->


</body>
</html>