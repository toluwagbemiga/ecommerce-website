<?php include 'header.php'; ?>

		
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						
						<form action="includes/login.php" method="POST">

							
							<input type="text" name="username" placeholder="Username" />
							<input type="password" name="password" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" name= "login" value="login"class="btn btn-default">Login</button></a>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-2 text-center">
					<h2 class="or text-center">OR</h2>
				</div>
				<div class="col-sm-5">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>

						<form action="login.php" method="POST" >
							<?php
								if(isset($_POST['signup'])){
									include_once "core/db_conn.php";
									include_once "core/functions.php";

									$username = htmlentities($_POST['username']);
									$password = htmlentities($_POST['password']);
									$firstname = htmlentities($_POST['firstname']);
									$lastname = htmlentities($_POST['lastname']);
									$address = htmlentities($_POST['address']);
									$user_contact = htmlentities($_POST['contact']);



									if(createUser($conn, $username, $password, $firstname, $lastname, $address, $user_contact) !== false){
										echo "Successful! Account created!";

									}  else{
										echo "Failed!";
									}

									}
							?>
							
							<input name="username" type="text" placeholder="Username"/>
							<input name="password" type="password" placeholder="Password"/>
							
							<hr>
							<input name="firstname" autocomplete="off" required type="text" placeholder="Firstname"/>
							<input name="lastname" autocomplete="off" required type="text" placeholder="Lastname"/>
							<input name="address" required type="text" placeholder="Address"/>
							<input name="contact" required type="text" placeholder="Contact"/>
							<button type="submit" name="signup" class="btn btn-default" value="signup">Signup</button>

						</form>
						
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

</header>




	<script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>