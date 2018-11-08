<?php
    session_start();
    //Figure out if there is a session key that holds a username
    //  if not send the user back to the
    if (!isset($_SESSION['username']) && empty($_SESSION['username'])) {
        header("Location: index.php");
    }
 ?>
