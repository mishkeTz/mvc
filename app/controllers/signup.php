<?php  
class Signup extends Controller {
    public function index() 
    {
    	$model = $this->model("Register");

        $this->view("signup/index");
    }


    public function welcome() 
    {
    	$model = $this->model("Register");
        $this->view("signup/welcome", ["username" => $model->username]);
    }



}
