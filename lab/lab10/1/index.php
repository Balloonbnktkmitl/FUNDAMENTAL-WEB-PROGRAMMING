<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab 10.1</title>
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&family=Itim&display=swap" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.min.js"></script>
    <style>
        *{
            font-family: 'Itim', cursive;
        }
        .container-md {
            padding: 20px;
        }
        tr {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container-md">
        <form action="" method="post">
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
            <?php
            // 1. Connect to Database 
            class MyDB extends SQLite3 {
                function __construct() {
                    $this->open('customers.db');
                }
            }

            
            // 2. Open Database 
            $db = new MyDB();
            if(!$db) {
                echo $db->lastErrorMsg();
            } else {
            
            }
            // 3. Query Execution
            // SQL Statements
            $sql ="SELECT * from customers;"; 
            $ret = $db->query($sql);    

            while($row = $ret->fetchArray(SQLITE3_ASSOC) ) { 
                    echo "<tr>";
                    echo "<th scope='row'>" . $row['CustomerId'] . "</td>";
                    echo "<td>" . $row['FirstName']. " " .$row['LastName'] . "</td>";
                    echo "<td>" . $row['Address'] . "</td>";
                    echo "<td>" . $row['Phone'] . "</td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "</tr>";
            }

            // 4. Close database
            $db->close();
            ?>
            </tbody>
            </table>
            <div>
                <button class="btn btn-danger" name="delete">Delete last data</button>
            </div>
        </form>
        <?php
        if(isset($_POST['delete'])) {
            // 1. Connect to Database 
            // 2. Open Database 
            $db = new MyDB();
            if(!$db) {
                echo $db->lastErrorMsg();
            } else {
            }
            // 3. Query Execution
            // SQL Statements
            $sql = "DELETE FROM customers WHERE CustomerId = (SELECT MAX(CustomerId) FROM customers);";
            $ret = $db->exec($sql);

            if(!$ret) {
                echo $db->lastErrorMsg();
            } else {
                echo "Deleted data successfully<br>";
            }
            // 4. Close database
            $db->close();
        }
        ?>
    </div>
    <?php
       
     ?>
</body>
</html>