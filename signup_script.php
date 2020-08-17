<?php

require 'includes/common.php';
$con = mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
$first_name = mysqli_real_escape_string($con, $_POST['first_name']);
$last_name = mysqli_real_escape_string($con,$_POST['last_name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password=mysqli_real_escape_string($con,$_POST['password']);
$contact = mysqli_real_escape_string($con,$_POST['contact']);
$city = mysqli_real_escape_string($con,$_POST['city']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$hashed_pwd=md5($password);

$query1 = "SELECT id FROM users WHERE email = '$email' AND password = '$hashed_pwd'";
$user_registration_query = "INSERT INTO users (first_name, last_name, email, password , contact , city , address) VALUE ('$first_name', '$last_name','$email', '$hashed_pwd', '$contact' , '$city' , '$address')";

$result = mysqli_query($con , $query1);
if(mysqli_num_rows($result)>0)
{
    header('location: signup.php?email_error=enter allready registered');
}
else {
    $result=mysqli_query($con, $user_registration_query);
    $_SESSION['email'] = $email;
    $_SESSION['id'] = mysqli_insert_id($con);
    header("location:product.php");
}
?>