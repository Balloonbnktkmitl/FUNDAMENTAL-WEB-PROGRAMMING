<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab10-1</title>
    <link href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet">
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.min.js"></script>
</head>
<style>
    th{
        text-align: center;
    }
</style>
<body class="d-flex justify-content-center">
    <div class="container mt-3">
        <table class="table table-responsive">
            <thead>
                <th>id</th>
                <th>name</th>
                <th>address</th>
                <th>phone</th>
                <th>e-mail</th>
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
                // echo "Opened database successfully<br>";
            }
            if (isset($_POST['trigger'])) {
                $sql = "DELETE FROM customers WHERE CustomerId = (
                    SELECT MAX(CustomerId) FROM customers
                )";
                $db->query($sql);
            }
            // 3. Query Execution
            $sql = "SELECT CustomerId, FirstName, LastName, `Address`, Phone, Email FROM customers;";
            $reuslt = $db->query($sql);
            while ($row = $result->fetchArray(SQLITE3_ASSOC) ) {
                echo "
                <tr>
                    <td>".$row['CustomerId']."</td>
                    <td>".$row['FirstName']." ".$row['LastName']."</td>
                    <td>".$row['Address']."</td>
                    <td>".$row['Phone']."</td>
                    <td>".$row['Email']."</td>
                </tr>
                ";
            }
            ?>
            </tbody>
        </table>
    </div>
</body>
<?php
$db->close();
?>
</html>