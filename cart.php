<?php
require 'includes/common.php';
if(!isset($_SESSION['email']))
{    header("location:login.php");}
    ?>
<!doctype html>
<html>
<head>
		<title>Cart-Lifestyle Store</title>
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
    $user_id = $_SESSION['id'];
    $con = mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
    $sql = "SELECT p.id, p.name, p.price FROM items p INNER JOIN users_item up ON up.item_id = p.id WHERE up.user_id = '$user_id' AND up.status = 'Added to cart'";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));

    if(mysqli_num_rows($result) == 0){ ?><br/><br/><br/>
        <h4 class="alert alert-danger text-center">Add products to cart first. Goto <a href="product.php">Products</a> page.</h4>
   <?php }else{
    $total = 0;
    ?>
	
	<!-- Order summery   -->
	 <div class="container row_style">
		 <br><h2>Order Summery</h2>
            <div class="table-responsive">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Item Number </th>
                        <th>Item Name </th>
                        <th>Price </th>
                        <th> </th>
                    </tr>
                    <?php while($row = mysqli_fetch_array($result)){ ?>
                        <tr>
                            <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["name"] ?></td>
                            <td><?php $total += $row["price"]; echo $row["price"] ?></td>
                            <td><a href="cart-remove.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Remove</a></td>
                        </tr>
                        <?php
                    }
                    ?>

					<tr>
                        <td> </td>
                        <td>Total </td>
                        <td> <i class="fa fa-rupee"></i> <?php echo $total; ?></td>
                        <td>
                            <a href="product.php" class="btn btn-primary " name="addmore">Add more</a>
                            <a href="success.php" class=""><button type="submit" class="btn btn-success " name="comfirm">Confirm order</button></a>
                        </td>
                    </tr>
				</tbody>
            </table>
        </div>
        </div>
	<?php } ?>
	<!--  footer  -->
    <?php
    include 'includes/footer.php';
    ?>
</body>
</html>