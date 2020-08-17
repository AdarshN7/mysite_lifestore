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
		<title>Setting-Lifestyle Store</title>
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
	
	<!-- change password form   -->
<div class="container-fluid ro">
            <div class="row row_style">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 ">
						<div class="panel panel-primary">
							<div class="panel-heading">
                        <h2>Change Password</h2></div>
							<div class="panel-body">
                        <form action="signup_script.php" method="post">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Old Password" name="oldpwd"  required = "true">
                            </div>
                            <div class="form-group">
								<input type="password" class="form-control" placeholder="New Password" name="newpwd"  required = "true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Re-typeNew Password" name="rnewpwd"  required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Change</button>
								</form></div>
							  <div class="panel-footer"> </div>
                    </div>
                    </div>
                </div>
            </div>
		
	
	
	<!--  footer  -->
	<footer>
		<div class="container">
			<center><label>Copyright © Lifestyle Store. All Rights Reserved” and “Contact Us: +91 90000 00000</label></center>
		</div>
	</footer>
</body>
</html>
