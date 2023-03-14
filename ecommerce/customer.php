<?php
 	include 'core/connect.php';
 	include 'core/functions.php';

 	session_start();
 	$id = $_SESSION['uid'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Customer</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
           
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
	<header id="header">
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<img src="images/logo.jpeg" alt="" />
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<form action="#" method="POST">
								<li><a href=""><i class="fa fa-user"></i> Account</a></li>
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart

									<?php

										$query = "SELECT `cart_id` FROM `cart` WHERE `user_id` = '$id' ORDER BY `cart_id`";
										$query_run = mysqli_query($conn, $query);
										$row = mysqli_num_rows($query_run);
										if($row > 0){

									?>
											<span class = "badge bg-danger"><?php echo $row ?></span>

									<?php
										}else{
									?>
										<span class = "badge bg-danger">0</span>
									<?php
										}
									?>




								</a></li>
								<li><a href="logout.php"><i class="fa fa-crosshairs"></i> Logout</a></li>
								</form>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
				
	
		<div class="header-bottom">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="customer.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                    	<li><a href="">LGA Shirts</a></li>
											 
                                    </ul>
                                </li> 
								
								<li><a href="contact-us.php">Contact</a></li>
								<li><a href="contact-us.php">About Us</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section id="slider"><!--slider-->
	
		<section>
			<br><br>

		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#shirts">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											LGA CLOTHING
										</a>
									</h4>
								</div>
								<div id="shirts" class="panel-collapse active">
									<div class="panel-body">
										<ul>
											<li><a href="#">Frat Shirts </a></li>
											<li><a href="#">LGA Designed Shirts </a></li>	
										</ul>
									</div>
								</div>
							</div>
							</div><!--/category-products-->



						</div>
				</div>

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						
						
						<?php 
                         	$sql = "SELECT * FROM `items`";
                         	$query = mysqli_query($conn, $sql);

                         	while($row = mysqli_fetch_array($query)){
                        ?>
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<form action = "process.php" method="get">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/<?php echo $row['item_img'];?>" alt="" />
											<h2><?php echo $row['item_price'];?></h2>
											<p><?php echo getCategory($conn, $row['item_id']) . " - " . $row['item_name'];?></p>
											
											<button type="submit" name="addcart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a></button>
										</div>

										
											
										<div class="product-overlay">
											<div class="overlay-content">

												<h2><?php echo "Php ". number_format($row['item_price'],2);?></h2>
												<p><?php echo $row['item_name'];?></p>
												<input type="hidden" name="item_id" value="<?php echo $row['item_id']; ?>">
												<input type="number" name="item_qty" value="1"> 
												<button type="submit" name="addcart" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</form>
								</div>								
							</div>
						</div>
						
						<?php }
                        ?>
						
				</div>
				</div>
						

	</section>


	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>LGA</span> CLOTHING</h2>
							<p>WE OFFER THE BEST AND HIGH QUALITY T-SHIRTS AND VAPE!</p>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>4506 ZONE|FELICIDAD SUBD SUCGAD, POLANGUI, ALBAY PHILIPPINES</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	<div class="footer-bottom">
			<div class="container">
				<div class="row">

					<p class="pull-left">Copyright © 2021 LGA E-Clothing Line All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Team Bootstrap</a></span></p>
				</div>
			</div>
		</div>

	</footer>
	

		


	  <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>