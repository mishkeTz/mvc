<?php  

use App\Core\Controller;

class Signup {

    protected $controller = null;

    public function __construct()
    {
        $this->controller = new Controller;
    }

    public function index() 
    {
    	$model = $this->controller->model("Register", $_POST);

        if (isset($_POST['register_btn']))
        {
            var_dump($_POST);
            die();
        }

        $this->controller->view("signup/index");
    }


    public function welcome() 
    {
    	$model = $this->controller->model("Register");
        $this->controller->view("signup/welcome", ["username" => $model->username]);
    }



}
