<?php

class Login{

	//Properties of Login class
	private $username;
    private $password;

    public $error;
    public $success;

    private $storage = "../Data/Data.json"; //same as before but this time for retreiving data from it
    private $stored_users;

    //Login class methods

    public function __construct($username, $password) 
    {
    	//Created methods can be called using this constructor

    	$this->username = $username;
    	$this->password = $password;
    	$this->stored_users = json_decode(file_get_contents($this->storage),true);

    	$this->login();
    }

    //Validation

    private function login()
    {
    	foreach ($this->stored_users as $user) 
    	{
    		if ($user['username'] == $this->username) 
    		{
    		   if(password_verify($this->password, $user['password'])) //password_hash->password_verify works together to encrypt->decrypt password
               {
    			session_start();
    			$_SESSION['user'] = $this->username;
    			header("location:../View/Profile.php");
    			exit();
    		   }
    		}
    	}
    	return $this->error = "Incorrect username or password";
    }
}
?>