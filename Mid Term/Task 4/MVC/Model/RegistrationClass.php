<?php

class Register{

	//Properties of Register class
	private $username;
	private $raw_pass; //user's input
	private $enc_pass; //user's input after hashing
	private $email;
	private $gender;
	private $dob;

	private $storage = "../Data/Data.json"; 
	//putting location of json in a variable for ease of use (no longer need to put json location inside functions)
	
	private $stored_users;
	private $new_user; // will be an array

	public $error;
	public $success;

	//Registration class methods

	public function __construct($username, $password, $email, $gender, $dob){ 

		//Created methods can be called using this constructor

		$this->username = filter_var(trim($username), FILTER_SANITIZE_STRING);
        //Removing white spaces & any illegal charactes

		$this->raw_pass = filter_var(trim($password), FILTER_SANITIZE_STRING);
		$this->enc_pass = password_hash($this->raw_pass, PASSWORD_DEFAULT); 
		//using newest encryption method by default to hash the password

		$this->email = filter_var($email, FILTER_VALIDATE_EMAIL);

		$this->gender = $gender;
		$this->dob = $dob;
		
		$this->stored_users = json_decode(file_get_contents($this->storage), true);

		$this->new_user = [
			"username" => $this->username,
			"password" => $this->enc_pass,
			"email"    => $this->email,
			"gender"   => $this->gender,
			"dob"      => $this->dob,
		];

		if($this->Fieldvaluecheck())
		{
			$this->insertdata();
		}
	}


    //Validations-Very basic for the moment, will add seprate validations once data passing is working properly.

	private function Fieldvaluecheck(){

		 if(empty($this->username) || empty($this->raw_pass) || empty($this->email) || empty($this->gender) || empty($this->dob)) 
		//if(isset($this->username) || isset($this->raw_pass) || isset($this->email) || isset($this->gender) || isset($this->dob))
		{
			$this->error = "All fields are required.";
			return false;
		}
		else
		{
			return true;
		}
	}

	private function existinguser(){

		foreach ($this->stored_users as $user){
			// Storing stored users in a variable $user, we will use $user to
			// check for match with the user's input $username variable
			if($this->username == $user['username'])
			{
				$this->error = "Username already exists, please choose a different one.";
				return true;
			}
		}
		return false;
	}

    //Data Insertion

	private function insertdata(){
		//First check if the username is available
		if($this->existinguser() == FALSE)
		{
			array_push($this->stored_users, $this->new_user);
			if(file_put_contents($this->storage, json_encode($this->stored_users,JSON_PRETTY_PRINT)))
				//JSON_PRETTY_PRINT is a flag for printing outputs after encoding in a more readable way.
			{
				return $this->success ="Registration Successful";
			}
			else
			{
				return $this->error ="Something went wrong, please try again";
			}

		}
	}
	

} 

?>