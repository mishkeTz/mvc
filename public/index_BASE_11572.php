<?php

require_once '../app/init.php';

<<<<<<< HEAD
//Test1
$app = new App;

//login section
include_once("../app/controllers/login.php");

$controller = new LogIn();
$controller->invoke();

?>
=======
if (isset($_POST['register_btn'])) {
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	$email 		= $_POST['email'];

	$register = new Register($username, $password, $email);
}

$app = new App;
>>>>>>> a86bfcca8d1a8273d8db842e6a7fc20e5fbebfec
