<?php
session_start(); //Start the current session
session_destroy(); //Destroy it! So we are logged out now
header("location:login.php?msg=Successfully Logged out"); // Move back to login.php with a logout message
?>