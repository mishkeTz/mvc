<?php  

namespace App\Models;

use App\Libraries\Database;

class Register
{
	public 		$db,
				$username,
				$password,
				$email;

	public function __construct($POST)
	{		

		if (isset($POST['register_btn']))
		{
			var_dump($POST);
			die();
		}

		$this->db = new Database;

		$this->username = $username;
		$this->password = $password;
		$this->email 	= $email;

		$this->checkUser();
	}

	public function checkUser()
	{
		if (($this->username != null) && ($this->password != null) && ($this->email) != null)
		{
			$this->registerUser();
		} 
	}

	public function registerUser()
	{
		$user = $this->db->prepare("
			INSERT into users
			VALUES (null, :username, :password, :email)
		");

		$user->execute([
			'username' 	=> $this->username,
			'password' 	=> $this->password,
			'email' 	=> $this->email
		]);

		if ($user->rowCount() > 0) 
		{
			header("Location: signup/welcome");
		}
	}

	


	
}

