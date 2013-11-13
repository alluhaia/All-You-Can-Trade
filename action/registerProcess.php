<?php


include '../db_connect.php';
include '../class/usersClass.php';
$user=new usersClass ($con);


if (isset($_POST['email'])) {

	$usernameExist=$user->getUsername($_POST['email']);
	
	if ($usernameExist== false) {
		
		echo "The email is already registered";

	}else {

		$userID=$user->addUser($_POST['username'], $_POST['password'], $_POST['email'], $_POST['zip']);
		session_start();
		$_SESSION['user_id']=$userID;
		header ("Location: ../index.php");
	}
}
?>