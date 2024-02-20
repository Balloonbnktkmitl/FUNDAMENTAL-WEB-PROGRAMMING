<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab9.1</title>
</head>
<body>
    <div id="ans">
        <p id="id">ID:</p>
        <p id="title">Title:</p>
        <p id="dept">Dept:</p>
        <p id="crd">Credits:</p>
    </div>
    <form method="post" action="">
        <p>Enter a record number: <input type="text" name="record" id="record"></p>
        <button type="submit" id="btn">Show</button>
    </form>

    <?php
        $servername = "localhost";
        $username = "S021N"; //ตามที่กำหนดให้
        $password = "SK92623"; //ตามที่กำหนดให้
        $dbname = "s021n";    //ตามที่กำหนดให้
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }

        if(isset($_POST['record'])){
            $record_number = $_POST['record'];
            $sql = "SELECT * FROM course";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
                $i = 0;
                while($row = mysqli_fetch_assoc($result)){
                    $i++;
                    if($i == $record_number){
                        echo "<script>document.getElementById('id').innerHTML = '" . "ID: " .$row['course_id'] . "';</script>";
                        echo "<script>document.getElementById('title').innerHTML = '". " Title: " . $row['title'] . "';</script>";
                        echo "<script>document.getElementById('dept').innerHTML = '". " Dept: " . $row['dept_name'] . "';</script>";
                        echo "<script>document.getElementById('crd').innerHTML = '". " Credits: " . $row['credit'] . "';</script>";
                    }
                }
            }
        }

        // close connection
        mysqli_close($conn);
    ?>

</body>
</html>