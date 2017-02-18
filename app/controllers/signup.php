<?php  

class Signup extends Controller {

    public function index() 
    {
    	$register = $this->model('Register');
        
        $this->view("signup/index");
    }

}

