<?php

include_once 'models/Model.php';

class Controller {
    public $model;

    public function __construct() {
        $this->model = new Model();
    }
    public function invoke() {
        $result = $this->model->getlogin();
    
    if($result == 'login') {
        include 'views/Afterlogin.php';
    } else {
        include 'views/login.php';
        }
    }
}