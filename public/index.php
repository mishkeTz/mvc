<?php

require_once '../app/init.php';


//Test1
$app = new App;

//login section
include_once("../app/controllers/login.php");

$controller = new LogIn();
$controller->invoke();



if (isset($_POST['register_btn'])) {
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	$email 		= $_POST['email'];

	$register = new Register($username, $password, $email);
}

$app = new App;

?>