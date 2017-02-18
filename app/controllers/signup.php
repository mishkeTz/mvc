<?php  

class Signup extends Controller {

    public function index() 
    {
    	$contact = $this->model('Register');
        
        $this->view("signup/index");
    }

    public function phone() 
    {
        echo "Phone contacts";
    }
}