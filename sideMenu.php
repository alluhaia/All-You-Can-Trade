
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

<div class="span3">
	 
	<ul id="nav">
    <ul class="top-level">
	<?php foreach ($categoryList as $cat) { ?>
        <li><a href="<?php echo '/is302/content/searchResult.php?categ_id='. $cat['id']; ?>"><?php echo $cat['label']; ?></a>
            <ul class="sub-level">
			 <?php 
			 $subCategList=$category->getSubCategory($cat['id'],null);
			 foreach ($subCategList as $subCat) { ?>
                <li><a href="<?php echo '/is302/content/searchResult.php?categ_id='. $cat['id'].'&subCateg_id='.$subCat['categ_id']; ?>"><?php echo $subCat['label']; ?></a>
				
				</li>
				<?php } ?>
				
             </ul>
		</li>
			 	<?php } ?>
       
   </ul>
</div>