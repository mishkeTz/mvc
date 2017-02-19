<?php

class Login extends Database 
{
	public 	$username,
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
            header("Location: signin/welcome");
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