<?php
$con = mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
require 'includes/common.php';
if (!isset($_SESSION['email']))
{
    header("location:index.php");
}
else
{
    $user_id=$_SESSION['id'];
    $email=$_SESSION['email'];

    $new_pwd=md5(mysqli_real_escape_string($con , $_POST['newpwd']));
    $rnew_pwd=md5(mysqli_real_escape_string($con , $_POST['rnewpwd']));

    if ($new_pwd != $rnew_pwd)
    {
        echo "The password do not match. Try again. ";
    }
    else
    {
        $sql="UPDATE users SET password ='$new_pwd' WHERE email='$email' and uid='$user_id'";
        $result= mysqli_query($con , $sql) or die(mysqli_error($con));
        header("location:setting.php");
    }
}