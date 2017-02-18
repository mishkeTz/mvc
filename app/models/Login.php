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

            if (($this->username == 'admin') && ($this->password == 'admin')) {
                return 'login';
            } else {
                return 'Invalid User';
            }
        }
    }
}
