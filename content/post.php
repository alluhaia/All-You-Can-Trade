<?php
include "../db_connect.php";
include "../class/categoryClass.php";
$category=new categoryClass($con);
$categoryList=$category->getCategory(null);
//$subCategoryList=$category->getSubCategory();
include "sessionInfo.php";
if (!isset($_SESSION['user_id'])) {
//redirect to the login form
header ("Location: login.php");
}

?>

<!DOCTYPE html>
 <html>
 <head>
         <meta charset="utf-8">
         <title>Rating.Com</title>
		 
         <link rel="stylesheet" href="http://flip.hr/css/bootstrap.min.css">
		<link href="css/webwidget_rating_simple.css" rel="stylesheet" type="text/css"></link>
		<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/webwidget_rating_simple.js"></script>	 
<script type="text/javascript" src="js/post.js"></script>	 
<script type="text/javascript" src="js/validateForms.js"></script>	  
		 <style>
		 
		
		 </style>
		 
 </head>
 <body>
         
 <div class="container">
        <?php
		include "content/mainHeader.php";
		
		?>
		 
		 
		
   
		 
		
		  <div class="row">
         <div class="span6">
          <h1>Rating.Com</h1>
		      

         </div><!-- .hero-unit -->
				 
         
		</div>
 <div class="row">
        <!-- <div class="span4"> -->
		  
		  <form class="form-horizontal" action='action/postProcess.php' method="POST" enctype="multipart/form-data" >
		  <fieldset>   <div id="legend">   <legend class="">Post form</legend>	  </div> 
		  
		  	 <?php
			 
			 if (isset ($_GET['fileUpload']) && $_GET['fileUpload'] == "notJPG" ) 
echo "<div  style='color: red ; font-size: large ;' >  Image has to be jpg  </div>"; 

if (isset ($_GET['fileUpload']) && $_GET['fileUpload'] == "Bigger" ) 
echo "<div  style='color: red ; font-size: large ;' > The file exceeded the size allowed </div>"; 

			 
			 
			 
			 ?>
		    <div class="control-group">  <!-- category -->
		<label class="control-label"  for="categ">Category</label>
	 <div class="controls">
	<select id="categ" name="categ"  onchange="getSubCateg(this);" >
	     <option value="">Select One</option>
		<?php 
		foreach ( $categoryList as $list )
                    echo "<option value=".$list['id'].">". $list['label']."</option>";
         
				?> 
		 </select>
		 </div>
		</div>
		  
	<!--   Subcategory List -->
		 <span id="subCategList"></span>

		
		  
		  	<!--   Brand List -->
		 <span id="brandList"></span>
		
		
		  
	   <span id="descControl" style="display: none;">
		  <div class="control-group" >  <!-- Description -->
		  <label class="control-label"  for="description">Description</label>
		  <div class="controls">
		  <input type="text" id="description" name="description" placeholder="" class="input-xlarge" required>
		 
		  </div>
		  </div>
</span>
		  
		  <span  id="image" style="display: none;">
		  
		     <div class="control-group">
		
			 
		  <!--Picture -->
		  <label class="control-label" for="pic">Image</label>
		  <div class="controls">
		  <input type="file" multiple="true" id="pic" name="pic" placeholder="" class="input-xlarge">
		  <p class="help-block"> JPG should not exceed 200 KB</p>
		  </div>
		  </div>
		  </span>
		  
		   <span  id="rating" style="display: none;">
		     <div id = "feedback">        
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
                    rating_initial_value: '0',
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
                    <td><input type="hidden" name="rate" value="" id="rate" required/></td>
                </tr>
            </tbody>
        </table>
		  
		  
		  
		  <p class="help-block"> (between 1 and 5)</p> 
 
		  </div>
		  </div>
		  </span>
		  
		  
		  
		  	  <div class="control-group" id= "submitButton" style="display: none;">   <!-- Button -->
		  <div class="controls">
		  <button class="btn btn-success">Submit</button>
		  </div>   
		  </div> 
		  </fieldset>
		  </form>
		  
		  
              
   
 </div><!-- .row -->
 </div><!-- .container -->
 
 </body>
</html>