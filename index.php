<?php
    require "includes/common.php";
    if (isset($_SESSION['email']))
        { header('location: products.php'); }
?>

<!doctype html>
<html>
<head>
		<title>Home-Lifestyle Store</title>
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
    ?>
	
	<!-- Banneer image   -->
	<div id="banner_image">
		<center>
		<div class="container">
			<div id="banner_content">
				<h1>Lifestyle Store</h1><br>
				<a href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
			</div>
		</div>
		</center>
	</div>

	<!--  footer  -->
    <?php
    include 'includes/footer.php';
    ?>
</body>
</html>
