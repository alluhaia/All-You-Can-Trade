<?php
// get the categories and subcategories with brands
include "../db_connect.php";
include "../class/categoryClass.php";
$category=new categoryClass($con);
$categoryList=$category->getSubCategory(null);

if (isset $_GET['brand_id']) {
	$Search=$category->getBrand($_GET['categ_id'],$_GET['subCateg_id'],$_GET['brand_id']);

} elseif (isset['subCateg_id']) {
	# get the subcateg
	$search=$category->getSubCategory($_GET['categ_id'],$_GET['subCateg_id']);

} elseif {
	# get the categ
	$search=$category->getSubCategory($_GET['categ_id']);

}


?>






<!DOCTYPE html>
 <html>
 <head>
         <meta charset="utf-8">
         <title>Rating.Com</title>
         <link rel="stylesheet" href="http://flip.hr/css/bootstrap.min.css">
		 <link rel="stylesheet" type="text/css" href="css/subMenu.css">
		 <style>
		 
		 .input-append button.add-on
		 {   
		 height: inherit !important;
		 
		 }
		

#nav {font-size:0.75em; width:150px;}
#nav ul {margin:0px; padding:0px;}
#nav li {list-style: none;} 

ul.top-level {background:#FFFFFF;}
ul.top-level li {
 border: lightgrey solid; 
 border-width: .5px;
}
 #nav ul.sub-level {border:1px solid lightgrey;}
ul li:hover ul li ul {visibility:hidden;} 
ul li ul li:hover ul {visibility:visible;} 

#nav a {
 color: #000000;
 cursor: pointer;
 display:block;
 height:25px;
 line-height: 25px;
 text-indent: 10px;
 text-decoration:none;
 width:100%;
}
#nav a:hover{
 text-decoration:underline;
}

#nav li:hover {
 
 background: lightgrey;
 
 position: relative;
}
ul.sub-level  {
    display: none;  
}


li:hover .sub-level {
    background: lightgrey;
    border: lightgrey solid;
    border-width: 1px;
    display: block;
    position: absolute;
    left: 50%;
    top: 50%;
}





#nav .sub-level {
    background: #FFFFFF;
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
	 
	<ul id="nav">
    <ul class="top-level">
	<?php foreach ($categoryList as $cat) { ?>
        <li><a href="#"><?php echo $cat['label']; ?></a>
            <ul class="sub-level">
			 <?php 
			 $subCategList=$category->getSubCategory($cat['id'],null);
			 foreach ($subCategList as $subCat) { ?>
                <li><a href="#"><?php echo $subCat['label']; ?></a>
				
				<ul class="sub-level">
			 <?php 
			     $brandList=$category->getBrand($subCat['categ_id'],$subCat['id'],null);
			 foreach ($brandList as $brand) { ?>
                <li><a href="#"><?php echo $brand['brand']; ?></a></li>
			
				<?php } ?>
						
					</ul>	
				</li>
				<?php } ?>
				
             </ul>
		</li>
			 	<?php } ?>
       
   </ul>
</div>

	 
	 
	 
	
		 
        <form class="navbar-form pull-left" action="content/searchResult.php" method="get">
		
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
		</div>
		</form>
 <div class="row">
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