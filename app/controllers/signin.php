<?php


class Signin extends Controller {

    public function index()
    {
        $model = $this->model("Login");

        

    	$this->view("signin/index");
    }

    public function welcome()
    {
        $model = $this->model("Login");
        $this->view("signin/welcome", ["username" => $model->username]);
    }
}