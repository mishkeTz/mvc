<?php

include_once ('models/Login.php');

class LogIn extends Controller {
    public $model;

    public function __construct() {
        $this->model = new Model();
    }
    public function invoke() {
        $result = $this->model->getlogin();
    
    if($result == 'login') {
        include 'views/login/Afterlogin.php';
    } else {
        include 'views/login/login.php';
        }
    }
}