<?php
	include '../core/connect.php';
	
	if(isset($_POST['signup'])){
		$user = $_POST['username'];
		$pwd = $_POST['password'];
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$usertype = $_POST['usertype'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];

		$sql = "INSERT INTO `users` (`user_id`, `username`, `password`, `usertype`, `firstname`,`lastname`, `address`, `user_contact`) VALUES (NULL, '$user', '$pwd', '$usertype', '$fname', '$lname', '$address', '$contact');";

		if(mysqli_query($conn, $sql)){
			header("Location: shippers.php");
		}else{
			echo "ERROR " . $sql . "<br>" . mysqli_error($conn);
		}
	}

?>