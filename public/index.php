<?php

require_once '../app/init.php';

//Test1
$app = new App;

//login section
include_once("../app/controllers/login.php");

$controller = new LogIn();
$controller->invoke();

?>