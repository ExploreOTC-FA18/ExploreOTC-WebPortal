<?php
    //// TODO: This must go at the top of all the webpages for the portal
    //      so a user can't just enter the url and access the information
    //Also the username and password will be different on the actual website
    include('../DB/conn.php');
    session_start();

    if (validate_password(strtolower($_POST["username"]), $_POST["password"])) {
        $_SESSION["username"] = $_POST["username"];
        header("Location: ../dashboard.php");
    } else {
        header("Location: ../index.php?login=false");
    }
 ?>
