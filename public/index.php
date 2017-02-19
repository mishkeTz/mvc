<?php
require_once '../app/init.php';


$app = new App;

if (isset($_POST['login_btn'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$login = new Login($username, $password);
}


if (isset($_POST['register_btn'])) {
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	$email 		= $_POST['email'];
	$register = new Register($username, $password, $email);

