<?php

require_once '../app/init.php';

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 49c00874b329fd85a4c342a4a31058b9bf935e29

//Test1
>>>>>>> c4a018ec2742f6b5dada571f19105c3d1d5a9804
$app = new App;

//login section
include_once("../app/controllers/signin.php");

$controller = new Signin();
$controller->invoke();

<<<<<<< HEAD


=======
<<<<<<< HEAD
=======


>>>>>>> c4a018ec2742f6b5dada571f19105c3d1d5a9804
>>>>>>> 49c00874b329fd85a4c342a4a31058b9bf935e29
if (isset($_POST['register_btn'])) {
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	$email 		= $_POST['email'];

	$register = new Register($username, $password, $email);
}
<<<<<<< HEAD
=======

$app = new App;

<<<<<<< HEAD
?>
=======
?>
>>>>>>> c4a018ec2742f6b5dada571f19105c3d1d5a9804
>>>>>>> 49c00874b329fd85a4c342a4a31058b9bf935e29
