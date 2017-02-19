<?php

class Signedin extends Controller {

    public function index() 
    {
        $this->view("login/welcome");
    }
}