<?php

class Login {
	protected 	$username,
				$password;

	public function __construct($username = null, $password = null)
	{
		$this->username = $username;
		$this->password = $password;

		$this->invoke();
	}

    public function invoke() {
        $result = $this->getlogin();
    
        if($result == 'login') {
            header("Location: signedin/index");
        } 
    }

    public function getlogin() {
        if(($this->username != null) && ($this->password != null)) {

<<<<<<< HEAD
            if (($this->username == 'admin') && ($this->password == 'admin')) {
=======
<<<<<<< HEAD
            if(($_REQUEST['username']=='admin') && ($_REQUEST['password']=='admin')) {
=======
            if (($_REQUEST['username'] == 'admin') && ($_REQUEST['password'] == 'admin')) {
>>>>>>> 49c00874b329fd85a4c342a4a31058b9bf935e29
>>>>>>> 8dd45278608ec159ed56e248d8b776762b83a3bf
                return 'login';
            } else{
                return 'Invalid User';
            }
        }
    }
}