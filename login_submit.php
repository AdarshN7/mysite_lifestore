<?php
require 'includes/common.php';
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$hashed_pwd=md5($password);
$sql="SELECT * FROM users WHERE email = '$email' AND password = '$hashed_pwd'";
$result=mysqli_query($con , $sql);
$count=mysqli_num_rows($result);

if($count==0){
    header("location:login.php");
} else {
    $row = mysqli_fetch_array($result);
    $_SESSION['email']=$row['email'];
    $_SESSION['id']=$row['id'];
    header("location:product.php");
}
?>