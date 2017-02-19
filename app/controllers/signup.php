<?php  

class Signup extends Controller {

    public function index() 
    {
    	$model = $this->model("Register");


        $this->view("signup/index");
    }

<<<<<<< HEAD
    public function welcome() 
    {
    	$model = $this->model("Register");
        $this->view("signup/welcome", ["username" => $model->username]);
    }

=======
>>>>>>> 2e971fb6e1dea938400247c774b1461efebfb890
}
