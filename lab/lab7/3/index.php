<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.min.js"></script>
    <style>
        .container {
            width: 50%;
            margin: 0 auto;
        }
        .form {
            margin-top: 50px;
        }
        .form-group {
            margin-bottom: 20px;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .status input{
            width: 2%;
            margin: 0 10px;
            padding: 10px;
            margin-top: 20px;
        }
        </style>
</head>
<body>
    <div class="container">
        <form class="form" method="post" action="">
            <h1>Member Register</h1>
            <div class="form-group name">
                <label for="name">Name : </label>
                <br>
                <input type="text" name="name" id="name" value="<?php if(isset($_POST['submit'])){echo $_POST['name'];}?>">
                <?php
                    if(isset($_POST['submit'])){
                        $name = $_POST['name'];
                        if(strlen($name) < 5){
                            echo "<p style='color:red'>Name must be at least 5 characters</p>";
                        }
                }
                ?>
            </div>
            <div class="form-group address">
                <label for="address">Address : </label>
                <br>
                <textarea type="text" name="address" id="address"><?php if(isset($_POST['submit'])){echo $_POST['address'];}?></textarea>
                <?php
                    if(isset($_POST['submit'])){
                        $address = $_POST['address'];
                        if(strlen($address) < 5){
                            echo "<p style='color:red'>Address must be at least 5 characters</p>";
                        }
                }
                ?>
            </div>
            <div class="form-group age">
                <label for="age">Age : </label>
                <br>
                <input type="number" name="age" id="age" value="<?php if(isset($_POST['submit'])){echo $_POST['age'];}?>">
                <?php
                    if(isset($_POST['submit'])){
                        $age = $_POST['age'];
                        if(is_int($age) > 0){
                            echo "<p style='color:red'>Please input age > 0</p>";
                        }
                }
                ?>
            </div>
            <div class="form-group profession">
                <label for="profession">profession : </label>
                <br>
                <input type="text" name="profession" id="profession" value="<?php if(isset($_POST['submit'])){echo $_POST['profession'];}?>">
                <?php
                    if(isset($_POST['submit'])){
                        $profession = $_POST['profession'];
                        if(strlen($profession) < 5){
                            echo "<p style='color:red'>Profession must be at least 5 characters</p>";
                        }
                }
                ?>
            </div>
            <div class="form-group status">
                <label for="status">Status : </label>
                <br>
                <input type="radio" class="status1" name="status1" id="status1" value="Resident" <?php if (isset($_POST['status1']) && $_POST['status1'] == 'Resident') { echo 'checked'; } ?>>
                <label>Resident</label>
                <input type="radio" class="status2" name="status1" id="status1" value="Non-Resident" <?php if (isset($_POST['status1']) && $_POST['status1'] == 'Non-Resident') { echo 'checked'; } ?>>
                <label>Non-Resident</label>
                <?php
                    if(isset($_POST['submit'])){
                        $status1 = $_POST['status1'];
                        $status2 = $_POST['status1'];
                        if($status1 == "" && $status2 == ""){
                            echo "<p style='color:red'>Please select status</p>";
                        }
                }
                ?>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
    <?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $profession = $_POST['profession'];
    $status1 = $_POST['status1']; // Assuming you have a single radio button with name "status1"

    // Validate all fields
    $errors = [];
    if (strlen($name) < 5) {
        $errors[] = "Name must be at least 5 characters";
    }
    if (strlen($address) < 5) {
        $errors[] = "Address must be at least 5 characters";
    }
    if (is_int($age) || $age <= 0) {
        $errors[] = "Please input age > 0";
    }
    if (strlen($profession) < 5) {
        $errors[] = "Profession must be at least 5 characters";
    }
    if (empty($status1)) {
        $errors[] = "Please select status";
    }

    // If there are no errors, redirect to show.php
    if (empty($errors)) {
        // You might want to process the data further before redirection
        // ...
        header("Location: show.php", true, 307);
    }
}
?>
</body>
</html>