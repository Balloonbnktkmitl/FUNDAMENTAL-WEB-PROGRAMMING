<?php
// Start the session
session_start();
?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab11 Test</title>
</head>
<body>
    <?php
    // display Session ID
    echo "Session ID : "  . session_id() . "<br>";
    // Set session variables
    $_SESSION["scolor"] = "Green";
    $_SESSION["sanimal"] = "Cat";
    echo "Session variables are set. <br>";

    echo "Data from session. <br>";
    echo $_SESSION["scolor"]  . "<br>";
    echo $_SESSION["sanimal"] . "<br>";

    ?>
    <?php

        session_start();
        if (isset($_SESSION['count'])) {
        $_SESSION['count'] = $_SESSION['count'] + 1;
        } else {
        $_SESSION['count'] = 1;
        }
        print "You've looked at this page " . $_SESSION['count'] . ' times.';

    ?>
</body>
</html>