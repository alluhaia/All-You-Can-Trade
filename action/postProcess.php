<?php
session_start();
$_SESSION['user_id']=2;


$prod_categ=explode(",", $_POST['subCateg']);
$brandInfo=explode(",", $_POST['brand']);


include '../db_connect.php';
include '../class/categoryClass.php';
include '../class/errorFunctionClass.php';

$category= NEW categoryClass($con);
$error= NEW errorFunctionClass();

$image=false;

if( $_FILES['pic']['name'] != "" )
{    
$image=true;  
 $ext = strtolower(end(explode('.', $_FILES['pic']['name'])));
if ($ext === 'jpg') {
$tmpName = $_FILES['pic']['tmp_name'];
//check the size 
if ($_FILES['file']['size']>200000) {
$error->errorFunction("Bigger", "sell");

}} else {
// redirect to the product page with error message
$error->errorFunction("notJPG", "sell");

			}
	}



// if (isset($_POST['rate']) && $_POST['rate'] !=0 ) {
// $_POST['pic']="";
// $prod_id=$category->addProduct($_SESSION['user_id'],$prod_categ[0], $prod_categ[1], $brandInfo[2], $_POST['description'], $_POST['rate'],$image, date('Y-m-d'));
// if (($prod_id != null) && ($image==true)) { // the product is successfully saved and now we need to get the image id to save it to the server
// $dir='../productImages';
// if (move_uploaded_file ($tmpName,$dir."/".$prod_id.".".$ext))
// echo "success";
// }

// } else {




// }
?>