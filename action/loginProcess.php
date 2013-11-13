<?php

include '../db_connect.php';
include '../class/usersClass.php';
$user=new usersClass ($con);
$usernameExist=$user->getUser($_POST['email'],$_POST['password']);


if (!empty ($usernameExist)) {

	session_start();
	$_SESSION['username']=$usernameExist['username'];
	$_SESSION['user_id']=$usernameExist['User_ID'];
	header ("Location: ../index.php");
	
} else {


	header ("Location: ../content/login.php?login=error");

}
?>