<?php

use App\Core\Controller;

class Contact {

    protected $controller = null;

    public function __construct()
    {
        $this->controller = new Controller;
    }

    public function index($email = '') 
    {
        $model = $this->controller->model("Contactus");

        $this->controller->view("contact/index", ["email" => $model->email]);
    }

    public function phone() 
    {
    	$model = $this->controller->model("Contactus");
        echo "Phone contacts " . $model->email;
    }
}