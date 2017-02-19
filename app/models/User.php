<?php

class User {
    public $name; //ima ime za primer da vidimo o cemu se radi

    public function __construct($post)
    {

		if (isset($post['login_btn'])) 
		{
			$username = $post['username'];
			$password = $post['password'];

			
			
			$login = new Login($username, $password);
		} 
		else if (isset($post['register_btn'])) 
		{
			$username 	= $post['username'];
			$password 	= $post['password'];
			$email 		= $post['email'];
				
			$register = new Register($username, $password, $email);
		}


	}
}