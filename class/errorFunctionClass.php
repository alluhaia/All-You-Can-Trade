<?php

class errorFunctionClass {
public function errorFunction($param, $page) {


 $path_parts = pathinfo($_SERVER['SCRIPT_NAME']);  
  $dir=explode("/", $path_parts['dirname']);


       if ( strpos( $param, "notJPG") !== false ) {

	$new_url = "http://" .  $_SERVER['SERVER_NAME'].":8080/".$dir[1]."/".$page.".php?fileUpload=notJPG"; 

	}	elseif ( strpos( $param, "Bigger") !== false )	{
	
		$new_url = "http://" .  $_SERVER['SERVER_NAME'].":8080/".$dir[1]."/".$page.".php?fileUpload=Bigger"; 
		
		}
	//echo $new_url;
	header ("Location: ".$new_url);
	
	}

}

?>