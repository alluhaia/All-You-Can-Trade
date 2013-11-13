<?php

session_start();
$_SESSION['user_id']=2;

include '../db_connect.php';
include '../class/categoryClass.php';

$category=new categoryClass ($con);


if (isset($_POST['user_id']) && $_POST['product_id'] !=0 ) {

header ("Location: ../index.php");

} else {




}
?>