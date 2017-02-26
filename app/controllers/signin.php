<?php

use App\Core\Controller;

class Signin {

    protected $controller = null;

    public function __construct()
    {
        $this->controller = new Controller;
    }

    public function index()
    {
        $model = $this->controller->model("Login");

    	$this->controller->view("signin/index");
    }


    public function welcome()

    {
        $model = $this->controller->model("Login");
        $this->controller->view("signin/welcome", ["username" => $model->username]);
    }
}