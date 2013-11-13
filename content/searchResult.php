<?php
include '../db_connect.php';
include '../class/searchClass.php';
include '../class/categoryClass.php';
$search=new searchClass ($con);$category=new categoryClass($con);
// check what parameters sent and then retrive te result based on
if(isset($_GET['search'])) {

$result=$search->getSearch($_GET['search']);	

}

elseif (isset ($_GET['brand_id'])) {
	$result=$search->getSearchMenu($_GET['categ_id'],$_GET['subCateg_id'],$_GET['brand_id']);

} elseif (isset($_GET['subCateg_id'])) {
	# get the subcateg
	$result=$search->getSearchMenu($_GET['categ_id'],$_GET['subCateg_id'],null);

} else {
	# get the categ
	$result=$search->getSearchMenu($_GET['categ_id'],null,null);

}


?>

<!DOCTYPE html>
 <html>
 <head>
         <meta charset="utf-8">
         <title>Rating.Com</title>
         <link rel="stylesheet" href="http://flip.hr/css/bootstrap.min.css">
		 <style>
		 
		 .input-append button.add-on
		 {   
		 height: inherit !important;
		 
		 }
		 
		 </style>
		 
 </head>
 <body>
         
 <div class="container">
     <?php 
	 include "../sessionInfo.php";
	 include "mainHeader.php";
	 ?>
		 
		 
		
   <div class="row-fluid">
     <div class="span3">
       <div class="well sidebar-nav sidebar-nav-fixed">
         <ul class="nav nav-list">
          <li ><a href="#">Books</a></li>
           <li><a href="#">Electronics</a></li>
           <li><a href="#">Home and decor</a></li>
           <li><a href="#">Motors</a></li>
		   <li><a href="#">Other</a></li>
          </ul>
       </div><!--/.well -->
     </div><!--/span-->
   
	
		 
		 
        <form class="navbar-form pull-left" action="" method="get">
		
		  <div class="row">
         <div class="span6">
		 
		 
          <h1>Rating.Com</h1>
		      
         <p>A specialized site to post products and rate them</p>
        <!-- <p><a class="btn btn-primary btn-large">Super important &raquo;</a></p>-->
         </div><!-- .hero-unit -->
				 
           <div class="span4">
		   <div class='input-append'> 
		<input  id="search" name="search"  type="text" placeholder="Search..." style="width : 80%;"/>  
		<button class='btn add-on' >      
		<i class="icon-search"></i>  
		</button></div>
		
		</div>
		</div>
			</form>
		</div>
	
		<?php foreach ( $result as $res ) {
   


   ?>
    <div class="row">
   <div class="span3">
      
     </div><!--/span-->
   
   <div class="span3">
 
    <img src="<?php echo '../productImages/'.$res['prod_id'].'.jpg' ;?>" style="max-width:100%;" alt="Product Image">
    </div><!--/product image-->
   
         <div class="span6">
         <h2>  </h2>
         <p><a href="<?php  echo '../product.php?product_id='.$res['prod_id'];?>"><?php echo $res['description'] ?></a></p>
		 <br>
		 
		  
	 <div class="control-group">  <!-- category -->
		<label class="control-label"  for="categ"><B>Category</B></label>
	 <div class="controls">
	    	<label class="control-label"  for="categ_val"><?php echo $res['categ_label']  ;?></label>	      
		</div>
		</div>
		 
		  <div class="control-group">  <!-- subcategory -->
		<label class="control-label"  for="categ"><B>SubCategory</B></label>
	 <div class="controls">
	    	<label class="control-label"  for="categ_val"><?php echo $res['subCateg_label']  ;?></label>
	      
		 </div>
		</div>
		 
		 
		 <div class="control-group">  <!-- brand -->
		<label class="control-label"  for="categ"><B>Brand</B></label>
	 <div class="controls">
	    	<label class="control-label"  for="categ_val"><?php echo $res['brand_label']  ;?></label>
	      
		 </div>
		</div>
		
		
		
         </div><!-- .span4 -->
        
         
		
			
			
			
 </div><!-- .row -->
<br>

<?php
}
?>
 </div><!-- .container -->
     
 </body>
</html>