<?php

class Contact extends Controller {

    public function index($email = '') 
    {
        $model = $this->model("Contactus");



        $this->view("contact/index", ["email" => $model->email]);
    }

    public function phone() 
    {
    	$model = $this->model("Contactus");
        echo "Phone contacts " . $model->email;
    }
}