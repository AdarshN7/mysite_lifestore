<?php
session_start();
if (!isset($_SESSION['email']))
{
    header("loction:insex.php");
}
else {
    session_unset();
    session_destroy();
    header("location:index.php?logout succesfully");
}
?>