<?php  


class Register extends Database
{
	public 		$db,
				$username,
				$password,
				$email;

	public function __construct($username = null, $password = null, $email = null)
	{
		$this->db = new Database;
	
		$this->username = $username;
		$this->password = $password;
		$this->email 	= $email;

		

		if (isset($_POST['register_btn']))
		{
			$this->checkUser();
		}
	}

	protected function checkUser()
	{
		if (($this->username != null) && ($this->password != null) && ($this->email) != null)
		{
			$this->registerUser();
		} 
	}

	protected function registerUser()
	{
		$this->user = $this->db->prepare("
			INSERT into users
			VALUES (null, :username, :password, :email)
		");

		$this->user->execute([
			'username' 	=> $this->username,
			'password' 	=> $this->password,
			'email' 	=> $this->email
		]);

		if ($this->user->rowCount() > 0) 
		{
			header("Location: signup/welcome");
		}
	}

	


	
}

