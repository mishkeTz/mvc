<?php

require_once "../app/models/Login.php";

class Signin extends Controller {
    public $model;

    public function __construct() {
        $this->model = new Login();
    }
    
    public function invoke() {
        $result = $this->model->getlogin();

        if($result == 'login') {
            header("Location: login/index");
        } 
    }

    public function index()
    {
        $this->view("login/welcome");
    }

    public function login()
    {
        $this->view("login/login");
    }
}