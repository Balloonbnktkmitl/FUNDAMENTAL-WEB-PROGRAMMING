<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab9.2</title>
    <style>
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #input{
            margin-top: 20px;

        }
        p{
            margin: 20px;
        }
        button{
            margin: 20px;
        }
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td{
            padding: 10px;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <div id="input">
            <p id="ids">Course ID: <input type="text" name="id" id="id"></p>
            <p id="titles">Title: <input type="text" name="title" id="title"></p>
            <p id="depts">Dept: <input type="text" name="dept" id="dept"></p>
            <p id="crds">Credits: <input type="text" name="crd" id="crd"></p>
        </div>
        <div class="button">
            <button type="submit" name="update" id="update" onclick="showAlertAndRefresh('Record updated successfully')">Update</button>
            <button type="submit" name="delete" id="delete" onclick="showAlertAndRefresh('Record delete successfully')">Delete</button>
        </div>
        <div id="table">
            <table>
                <tr>
                    <th>Course ID</th>
                    <th>Title</th>
                    <th>Dept</th>
                    <th>Credits</th>
                </tr>
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

                    $sql = "SELECT * FROM course";
                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<tr>";
                            echo "<td><a href='#' onclick='showCourseID(\"" . $row['course_id'] . "\", \"" . $row['title'] . "\", \"" . $row['dept_name'] . "\", \"" . $row['credit'] . "\")'>" . $row['course_id'] . "</a></td>";
                            echo "<td>" . $row['title'] . "</td>";
                            echo "<td>" . $row['dept_name'] . "</td>";
                            echo "<td>" . $row['credit'] . "</td>";
                            echo "</tr>";
                        }
                    }
                    // close connection
                    mysqli_close($conn);
                ?>
            </table>
        </div>
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
        if(isset($_POST['update'])){
            $id = $_POST['id'];
            $title = $_POST['title'];
            $dept = $_POST['dept'];
            $crd = $_POST['crd'];
            $sql = "UPDATE course SET title='$title', dept_name='$dept', credit='$crd' WHERE course_id='$id'";
            if (mysqli_query($conn, $sql)) {
                
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }
        }
        if(isset($_POST['delete'])){
            $id = $_POST['id'];
            $sql = "DELETE FROM course WHERE course_id='$id'";
            if (mysqli_query($conn, $sql)) {
                
            } else {
                echo "Error deleting record: " . mysqli_error($conn);
            }
        }
    ?>
    <script>
    function showCourseID(courseID, title, dept, crd) {
        console.log("Clicked course ID:", courseID);
        document.getElementById('id').value = courseID;
        document.getElementById('title').value = title;
        document.getElementById('dept').value = dept;
        document.getElementById('crd').value = crd;
    }
    function showAlertAndRefresh(message) {
        alert(message);
        location.reload();
    }
    </script>
</body>
</html>