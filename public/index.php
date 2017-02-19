<?php
require_once '../app/init.php';
<<<<<<< HEAD
$app = new App;
if (isset($_POST['login_btn'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$login = new Login($username, $password);
}
=======

$app = new App;

if (isset($_POST['login_btn'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = new Login($username, $password);
}

>>>>>>> 2e971fb6e1dea938400247c774b1461efebfb890
if (isset($_POST['register_btn'])) {
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	$email 		= $_POST['email'];
	$register = new Register($username, $password, $email);
<<<<<<< HEAD
}
=======
}

>>>>>>> 2e971fb6e1dea938400247c774b1461efebfb890
