<?php 
	include 'header.php'; 
	include '../core/connect.php';

?>

				<div class="col-sm-5">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>

						<form action="shipper_sign.php" method="POST" >
							
							<input name="username" type="text" placeholder="Username"/>
							<input name="password" type="password" placeholder="Password"/>
							
							<hr>
							<input name="firstname" autocomplete="off" required type="text" placeholder="Firstname"/>
							<input name="lastname" autocomplete="off" required type="text" placeholder="Lastname"/>
							<input type="hidden" name="usertype" value="shipper">
							<input name="address" required type="text" placeholder="Address"/>
							<input name="contact" required type="text" placeholder="Contact"/>
							<input type="submit" name="signup" class="btn btn-default" value="Signup">
						</form>
						
					</div><!--/sign up form-->
				</div>
