<?php
require 'includes/common.php';
?>
<!doctype html>
<html>
<head>
		<title>Product-Lifestyle Store</title>
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
    include 'includes/check-if-added.php';
    ?>
	
	<!-- products   -->
<div class="container head_style">
	<div class="jumbotron jmbostyle">
		<h1>Welcome to our Lifestyle Store!”</h1>
		<p>We have the best cameras, watches and shirts for you. No need to hunt around, we
have all in one place.”</p>
	</div>
	<div class="row text-center">
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail"> 
				<img src="img/5.jpg" alt="camera img">
                <h4>Cannon EOS</h4><h6>Price: Rs.36000.00</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary btn-block">Buy now</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(1)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
			</div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail"> 
				<img src="img/2.jpg" alt="camera img">
				<h4>Sony DSLR</h4><h6>Price: Rs.40000.00</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary btn-block">Buy now</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(2)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail"> 
				<img src="img/3.jpg" alt="camera img">
				<h4>Sony DSLR</h4><h6>Price: Rs.50000.00</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary btn-block">Buy now</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(3)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail"> 
				<img src="img/4.jpg" alt="camera img">
				<h4>Olympus DSLR</h4><h6>Price: Rs.80000.00</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary btn-block">Buy now</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(4)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
	</div>
	

	<div class="row text-center">
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail"> 
				<img src="img/9.jpg" alt="watch img">
				<h4>Titan Model#301</h4><h6>Price: Rs.13000.00</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary btn-block">Buy now</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(5)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail"> 
				<img src="img/10.jpg" alt="watch img">
				<h4>Titan Model#201</h4><h6>Price: Rs.3000.00</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary btn-block">Buy now</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(6)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail"> 
				<img src="img/11.jpg" alt="watch img">
				<h4>HMT Milan</h4><h6>Price: Rs.8000.00</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary btn-block">Buy now</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(7)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail"> 
				<img src="img/12.jpg" alt="watch img">
				<h4>Faber Luba#111</h4><h6>Price: Rs.18000.00</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary btn-block">Buy now</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(8)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
	</div>
	

	<div class="row text-center">
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail"> 
				<img src="img/8.jpg" alt="sirt img">
				<h4>H and W</h4><h6>Price: Rs.1800.00</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary btn-block">Buy now</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(9)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail"> 
				<img src="img/6.jpg" alt="sirt img">
				<h4>Luis Phil</h4><h6>Price: Rs.3000.00</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary btn-block">Buy now</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(10)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail"> 
				<img src="img/14.jpg" alt="shirt img">
				<h4>Jhalsani</h4><h6>Price: Rs.2300.00</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary btn-block">Buy now</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(11)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
		<div class="col-md-3 col-sm-6">
			<div class="thumbnail"> 
				<img src="img/13.jpg" alt="shirt img">
				<h4>John Zok</h4><h6>Price: Rs.2500.00</h6>
                <?php if(!isset($_SESSION["email"])){ ?>
                    <a href="login.php" type="button" class="btn btn-primary btn-block">Buy now</a>
                <?php }else{ ?>
                    <?php if(check_if_added_to_cart(12)){ ?>
                        <a href="#" class="btn btn-success btn-block" disabled>Added to cart</a>
                    <?php }else{ ?>
                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                    <?php }
                } ?>
            </div>
		</div>
	</div>

	</div>
	
	
	<!--  footer  -->
	<<?php
    include 'includes/footer.php';
    ?>
</body>
</html>