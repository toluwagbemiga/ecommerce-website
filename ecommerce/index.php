<?php include 'header.php'; ?>

	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>LGA E</span>-Clothing</h1>
									<h2>100% Cotton and Responsive Design</h2>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
								<img src="images/vaping.jpeg" class="vaping" alt="" />

								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>LGA E</span>-Clothing</h1>
									<h2>100% Cotton and Responsive Design</h2>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/hunter.jpeg" class="hunter" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>LGA E</span>-Clothing</h1>
									<h2>100% Cotton and Responsive Design</h2>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/solido.jpeg" class="solido" alt="" />
									
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>LGA E</span>-Clothing</h1>
									<h2>100% Cotton and Responsive Design</h2>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/pol.jpeg" class="polangui" alt="" />
									
								</div>
							</div>
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>

		<br><br>	<br><br>

		<section>
		<div class="container mt-5">
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
						<h2 class="title text-center">Features Items</h2>
						
						<?php 
                         $items = getAll($conn, 'items');
                         foreach($items as $item_key => $item){
                             //this is to check for changes
                        ?>
						
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/<?php echo $item['item_img'];?>" alt="" />
											<h2><?php echo $item['item_price'];?></h2>
											<p><?php echo getCategory($conn, $item['item_id']) . " - " . $item['item_name'];?></p>
											
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>

										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?php echo "Php ". number_format($item['item_price'],2);?></h2>
												<p><?php echo $item['item_name'];?></p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
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