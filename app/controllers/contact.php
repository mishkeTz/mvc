<?php

class Contact extends Controller {

    public function index($email = '') 
    {
    	$contact = $this->model('Contactus');
        $this->view("contact/index", ["email" => $contact->email]);
    }

    public function phone() 
    {
        echo "Phone contacts";
    }
}