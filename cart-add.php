<?php
require 'includes/common.php';
$con = mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
$item_id = $_GET['id'];
$user_id= $_SESSION['id'];
$sql=" INSERT INTO users_item(user_id,item_id,status) VALUE ('$user_id','$item_id','Added to cart')";
$result = mysqli_query($con, $sql);
header("location:product.php");
?>