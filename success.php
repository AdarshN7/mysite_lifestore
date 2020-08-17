<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{
    header("location:index.php");
}
?>
<!doctype html>
<html>
<head>
		<title>Successfully-Lifestyle Store</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
	    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!--   Navigation Bar -->
    <?php
    include 'includes/header.php';
    $con = mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
    $user_id=$_SESSION['id'];
    $sql="SELECT item_id FROM users_item WHERE user_id='$user_id'";
    $result= mysqli_query($con , $sql) or die(mysqli_error($con));
    while($row=mysqli_fetch_array($result))
    {
        $item_id=$row['item_id'];
        $sql1="UPDATE users_item SET status='Confirmed' WHERE item_id= '$item_id'";
        $result1=mysqli_query($con, $sql1) or die(mysqli_error($con));
    }
    ?>
	
	<!-- order confirmed message   -->
	<div class="head_style">
	<div class="alert alert-success text-center" role="alert">
  <h1>Your order is confirmed.</h1>
	<h5>Thank you for shopping with us.
		<a href="product.php">Click here</a> to purchase any other item.</h5>
</div></div>
	
	
	<!--  footer  -->
    <?php
    include 'includes/footer.php';
    ?>
</body>
</html>
