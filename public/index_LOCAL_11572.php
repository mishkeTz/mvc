<?php

require_once '../app/init.php';

$app = new App;

//login section
include_once("../app/controllers/signin.php");

$controller = new Signin();
$controller->invoke();

if (isset($_POST['register_btn'])) {
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	$email 		= $_POST['email'];

	$register = new Register($username, $password, $email);
}
