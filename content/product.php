<?php
//session_start();
//$_SESSION['user_id']=2;
include "../db_connect.php";
include "../class/categoryClass.php";
$category=new categoryClass($con);

$prod_id=$_GET['product_id'];

$productInfo=$category->getProduct($prod_id);
$categoryLabel=$category->getCategory($productInfo['category_id']);

$subCategoryLabel=$category->getSubCategory($productInfo['category_id'],$productInfo['subcateg_id']);
$brand=$category->getBrand($productInfo['category_id'],$productInfo['subcateg_id'],$productInfo['brand']);


?>




<!DOCTYPE html>
 <html>
 <head>
         <meta charset="utf-8">
         <title>Rating.Com</title>
		 
         <link rel="stylesheet" href="http://flip.hr/css/bootstrap.min.css">
		<link href="css/webwidget_rating_simple.css" rel="stylesheet" type="text/css"></link>
		<script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../js/webwidget_rating_simple.js"></script>	 
<script type="text/javascript" src="../js/validateForms.js"></script>	  
		 <style>
		 
		
		 </style>
		 
 </head>
 <body>
         
 <div class="container">
        <?php
		include "../sessionInfo.php";
		include "mainHeader.php";
		if (isset ($_SESSION['user_id']))
		$getRate=$category->getRate($prod_id,$_SESSION['user_id']);
		
		
		?>
		 
		 
		
   
		 
		
		  <div class="row">
         <div class="span6">
          <h1>Rating.Com</h1>
		      

         </div><!-- .hero-unit -->
				 
         
		</div>
 <div class="row">
         <div class="span4">
		  
		  <form class="form-horizontal" action='../action/postProductForm.php' method="POST" onsubmit="return validateProdForm();" enctype="multipart/form-data" >
		  <?php		
		
		  if (isset($_SESSION['user_id'])) {
?> 
		  <fieldset>   <div id="legend">   <legend class="">Rate form</legend>
		  
		  </div>
 
		  <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id'];?>" id="user_id" />
<?php } else {
?>         <fieldset>   <div id="legend">   <legend class="">Product 
           <p class="help-block"> Please sign in to rate the product</p> 
			</legend>
<?php
}
?>		 
		 <input type="hidden" name="product_id" value="<?php echo $prod_id ;?>" id="product_id" />
		  
		  <img src="<?php echo 'productImages/'.$prod_id,'.jpg' ;?>" style="max-width:100%;" alt="Product Image">
		  
		    <div class="control-group">  <!-- category -->
		<label class="control-label"  for="categ">Category</label>
	 <div class="controls">
	    	<label class="control-label"  for="categ_val"><?php echo $categoryLabel[0]['label'] ;?></label>
	      
		 </div>
		</div>
		  
	
		   <div class="control-group">  <!-- subCategory -->
		<label class="control-label"  for="subCateg">SubCategory</label>
	 <div class="controls">
	    	<label class="control-label"  for="subCateg_val"><?php echo $subCategoryLabel[0]['label'] ;?></label>
	        
		 </div>
		</div>

		
		  
		   <div class="control-group">  <!-- brand -->
		<label class="control-label"  for="brand">Brand</label>
	 <div class="controls">
	    	<label class="control-label"  for="brand_val"><?php echo $brand[0]['brand'] ;?></label>
	
		 </div>
		</div>
		
		
		  
	  
		  <div class="control-group" >  <!-- Description -->
		  <label class="control-label"  for="description">Description</label>
		  <div class="controls">
		  <input type="text" id="description" readonly="readonly" name="description"  class="input-xlarge" value="<?php echo $productInfo['description'];?>">
		 
		  </div>
		  </div>

		  
		
		  <?php if (isset($_SESSION['user_id'])) { ?>
		  
		  <div class="control-group" id = "rating" >
		  <!-- Rating -->
		    <label class="control-label" for="rate">Rating</label>
		  <div class="controls">
		  
		   <script language="javascript" type="text/javascript">
            function test(value){
             //  alert("This rating's value is "+value);
			  // alert (document.getElementById("rate").value);
            }
            $(function() {
                $("#rate").webwidget_rating_simple({
                    rating_star_length: '5',
                    rating_initial_value: '<?php echo $getRate['rate']?>',
                    rating_function_name: 'test',//this is function name for click
                    directory: 'img'
                });
            });
        </script>
		
		  <table border="0">
            <thead>
                <tr>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="hidden" name="rate" value="" id="rate" required /></td>
                </tr>
            </tbody>
        </table>
		  
		  
		  
		  <p class="help-block"> (between 1 and 5)</p> 
 
		  </div>
		  </div>

	
		  
		  
		  	 
		  <div class="controls">
		  <button class="btn btn-success">Submit</button>
		  </div>   
		  
		  	  <?php }
		  ?>
		  </fieldset>
		  </form>
		  
		  
         </div><!-- .span4 -->
   
      
   
 </div><!-- .row -->
 </div><!-- .container -->
     
	 
	 
 </body>
</html>