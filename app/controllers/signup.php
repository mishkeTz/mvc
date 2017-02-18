<?php  

class Signup extends Controller {

    public function index() 
    {
    	$register = $this->model('Register');
        
        $this->view("signup/index");
    }

<<<<<<< HEAD
}

=======
    public function phone() 
    {
        echo "Phone contacts";
    }
}
>>>>>>> 8dd45278608ec159ed56e248d8b776762b83a3bf
