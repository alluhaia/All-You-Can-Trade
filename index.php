<?php
// get the categories and subcategories with brands
include "db_connect.php";
include "class/categoryClass.php";
$category=new categoryClass($con);
$categoryList=$category->getCategory(null);

?>




<!DOCTYPE html>
 <html>
 <head>
         <meta charset="utf-8">
         <title>All You Can Trade</title>
         <link rel="stylesheet" href="http://flip.hr/css/bootstrap.min.css">
		 <link rel="stylesheet" type="text/css" href="css/subMenu.css">

		 
 </head>
 <body>
         


		 
 <div class="container">
 
 
 
 
 
     <?php
     include "sessionInfo.php";
	 include "content/mainHeader.php";
	 ?>
		 

	 
		
   <div class="row-fluid">
     <?php include "sideMenu.php"; ?>

	 
	 
	 
	
		 
        <form class="navbar-form pull-left" action="content/searchResult.php" method="get">
		
		  <div class="row">
         <div class="span12">
		 
		 
	          <h1>All You Can Trade</h1>
			      
	         <p>An Online site to exchange baby products</p>
        
         </div><!-- .hero-unit -->
				 
          <div style="padding:20px;">
			<form class="form-search form-inline">
			        <input type="text" class="search-query" placeholder="Search..." />
			</form>
		  </div>
		
		</div>
		</div>
		</div>
		</form>
 <div class="row-fluid">

         <div class="span4">
         <h2>Box Number 1</h2>
         <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
         <p><a class="btn" href="#">Click meeee &raquo;</a></p>
         </div><!-- .span4 -->
   
         <div class="span4">
                 <h2>Box Number 2</h2>
         <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
         <p><a class="btn" href="#">Click meeee &raquo;</a></p>
         </div><!-- .span4 -->
   
         <div class="span4">
                 <h2>Box Number 3</h2>
         <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
         <p><a class="btn" href="#">Click meeee &raquo;</a></p>
         </div><!-- .span4 -->
   
 </div><!-- .row -->

 </div><!-- .container -->
 
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
	 
 </body>
</html>