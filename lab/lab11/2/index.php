<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab11.1</title>
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_POST['savedata'])) {
            // บันทึกค่าใหม่ใน cookies
            setcookie('cusid', $_POST['eid'], time() + (86400), "/");
            setcookie('firstname', $_POST['firstname'], time() + (86400), "/");
            setcookie('lastname', $_POST['lastname'], time() + (86400), "/");
            setcookie('address', $_POST['address'], time() + (86400), "/");
            setcookie('email', $_POST['email'], time() + (86400), "/");
            setcookie('phone', $_POST['phone'], time() + (86400), "/");
        }
        if(isset($_POST['cleardata'])) {
            // ลบค่าใน cookies
            setcookie('cusid', '', time() - 3600, "/");
            setcookie('firstname', '', time() - 3600, "/");
            setcookie('lastname', '', time() - 3600, "/");
            setcookie('address', '', time() - 3600, "/");
            setcookie('email', '', time() - 3600, "/");
            setcookie('phone', '', time() - 3600, "/");
        }
    ?>
    <div class="container">
    <h1>Employee Information</h1>
    <h3>ปล.ถ้ากดไม่ติดรบกวนกดอีกครั้ง ปล2.กดคลิกที่ตัวเลขแล้วกดsaveแล้วลองrefresh 1 ครั้ง ปุ่ม show จะกลับมาเป็นเหมือนเดิม</h3>
    <form action="" method="post">
        <div class="form-group">
        <label for="eid">Employee ID:</label><br>
        <input type="text"  class="form-control " id="eid" name="eid"><br>
        </div>
        <div class="form-group">
        <label for="firstname">Firstname:</label><br>
        <input type="text"  class="form-control" id="firstname" name="firstname" ><br>
        </div>
        <div class="form-group">
        <label for="lastname">Lastname:</label><br>
        <input type="text" class="form-control" id="lastname" name="lastname" ><br>
        </div>
        <div class="form-group">
        <label for="address">Address:</label><br>
        <textarea type="text" class="form-control" id="address" name="address"></textarea><br>
        </div>
        <div class="form-group">
        <label for="email">Email:</label><br>
        <input type="text" class="form-control" id="email" name="email" ><br>
        </div>
        <div class="form-group">
        <label for="phone">Phone:</label><br>
        <input type="text" class="form-control" id="phone" name="phone" ><br>
        </div>
        <div>
            <button type="submit" class="btn btn-success" name="savedata">Save Data</button>
            <button type="button" class="btn btn-info" name="showdatas" onclick="showdata('<?php echo $_COOKIE['cusid']; ?>', '<?php echo $_COOKIE['firstname']; ?>', '<?php echo $_COOKIE['lastname']; ?>', '<?php echo $_COOKIE['address']; ?>', '<?php echo $_COOKIE['email']; ?>', '<?php echo $_COOKIE['phone']; ?>')">Show Data</button>
            <button type="submit" class="btn btn-danger" name="cleardata">Clear Data</button>
        </div>
    </form>
    <div id="table">
            <table>
                <tr>
                    <th>Employee ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
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

                    $sql = "SELECT * FROM customers";
                    $ret = $db->query($sql);
                    while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
                        echo "<tr>";
                        echo "<td><a href='#' onclick='showdata(\"" . $row['CustomerId'] . "\", \"" . $row['FirstName'] . "\", \"" . $row['LastName'] . "\", \"" . $row['Address'] . "\", \"" . $row['Email'] . "\", \"" . $row['Phone'] . "\")'>" . $row['CustomerId'] . "</td>";
                        echo "<td>" . $row['FirstName'] . "</td>";
                        echo "<td>" . $row['LastName'] . "</td>";
                        echo "<td>" . $row['Address'] . "</td>";
                        echo "<td>" . $row['Email'] . "</td>";
                        echo "<td>" . $row['Phone'] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
            </div>
        </div>
</body>
<script>
    function showdata(eid, firstname, lastname, address, email, phone) {
        console.log(eid);
        console.log(firstname);
        document.getElementById("eid").value = eid;
        document.getElementById("firstname").value = firstname;
        document.getElementById("lastname").value = lastname;
        document.getElementById("address").value = address;
        document.getElementById("email").value = email;
        document.getElementById("phone").value = phone;
    }
</script>
</html>