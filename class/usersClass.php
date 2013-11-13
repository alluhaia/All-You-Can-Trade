<?php

class usersClass {

var $con;


public function __construct($con) {
		$this->con = $con;
}

public function getUserByID($userID) {

	$query = "select * from users where User_ID=". $userID;
			$res = $this->con->query($query);
		
	return $row = $res->fetch_assoc();
        

	}

public function getUser($email,$password) {

	$password=mysql_real_escape_string(md5($password));
	$query = "select * from users where email='".trim(strtolower($email)). "' and password='". $password."'" ;
	
			$res = $this->con->query($query);
		
	return $row = $res->fetch_assoc();
        

	}
	
// function to see if the user name already exist before registering the user

public function getUsername($email) {

	$query = "select * from user where email='".$email. "'" ;
			$res = $this->con->query($query);
	if ($res->num_rows>0)
	 return false;
	 else 
	 return true;


	}	
	
	
	
public function addUser($username, $password, $email, $zipcode) {

	$password=mysql_real_escape_string(md5($password));
	$query = "INSERT INTO users (username, password, email, zipcode) VALUES ('".$username."','".$password."','". $email."','".$zipcode."')";
			$res = $this->con->query($query) or die("database error" . $this->con->error);
		return $user_id = $this->con->insert_id;
	}	
	
	
	
	
}

?>