<?php  

namespace App\Models;

class Register
{
	public $db;

	public function __construct()
	{		

		if (isset($_POST['register_btn']))
		{
			$this->checkUser();
			echo "__construct";
		}

		
	}

	public function checkUser()
	{
		if (isset($_POST['username']) & isset($_POST['password']) & isset($_POST['email']))
		{
			$this->registerUser();
			echo "checkUser";
		} 
	}

	public function registerUser()
	{
		$ime = $_POST['username'];
		$sifra = $_POST['password'];
		$email = $_POST['email'];

		$this->db = new \App\Libraries\Database;

		$prepare = $this->db->prepare("INSERT INTO users (username, password, email) VALUES (:ime, :sifra, :email)");
		$prepare->execute(array(
			":ime" => $ime,
			":sifra" => $sifra,
			":email" => $email
		));
		
		echo "registerUser";
	}
}

