<?php

class categoryClass {

var $con;


public function __construct($con) {
		$this->con = $con;
}

public function getCategory($id) {

if ($id==null)
$query = "select * from category ";
else 
$query = "select * from category WHERE cat_label=".$id ;

		$res = $this->con->query($query);
		$result = array();
		
		while ($row = $res->fetch_assoc()) {
			$result[] = $row;
			}
		return $result;


	}

	
	
public function getSubCategory($categ,$subCateg) {

	if ($subCateg==null)
		$query = "select * from subcategory WHERE cat_label=".$categ;
	else
		$query = "select * from subcategory WHERE cat_label=".$categ." AND cat_c_label=".$subCateg;

			$res = $this->con->query($query);
			$result = array();
			
		while ($row = $res->fetch_assoc()) {
			$result[] = $row;
			}
		return $result;


	}


	
	
public function addProduct($userID,$categ, $subCateg, $name, $desc, $condition, $availablility) {

// make sure that we don't have the product already before adding
$query = "select * from product WHERE  cat_label = ".$categ." AND sub_c_label =". $subCateg. " AND product_name=".$name. " AND  description LIKE '%". $desc."%'";

$res = $this->con->query($query);


if ($res->num_rows > 0) {
	// get the product id and then redirect the user to the page so he/she can rate it
	$row = $res->fetch_assoc();

	header ("Location: ../product.php?exist=true&product_id=".$row['id']);

} else {

	$query = "INSERT INTO product (user_id, cat_label, sub_c_label, product_name, description,date) VALUES (".$categ.",".$subCateg.",".$brand.",'". $desc. "','".$date."')";

	$res = $this->con->query($query) or die("database error" . $this->con->error);
		
	/* To insert the rating 
	1- get the id of the product and user_id
	*/
	$productID = $this->con->insert_id;
	$query = "INSERT INTO rate (product_id, user_id, rate ) VALUES (".$productID.",".$userID.",". $rate.")";
	$res = $this->con->query($query) or die("database error" . $this->con->error);
			
	if ($img==true) {

			$query = "INSERT INTO image (product_id, image_id) VALUES (".$productID.",".$productID.")";
			$res = $this->con->query($query) or die("database error" . $this->con->error);
		}
		
	return $productID;	
		
	}
}		





function getProduct($prodID) {

		$query = "select * from product where product_id=".$prodID ;
				$res = $this->con->query($query);
			
		return $row = $res->fetch_assoc();


	}




}
?>