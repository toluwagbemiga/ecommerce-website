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