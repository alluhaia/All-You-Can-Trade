<!DOCTYPE html>
 <html>
 <head>
         <meta charset="utf-8">
         <title>All You Can Trade</title>
         <link rel="stylesheet" href="http://flip.hr/css/bootstrap.min.css">
		 <style>
		 
		
		 </style>
		 
 </head>
 <body>
         
 <div class="container">
        <?php
			include "../sessionInfo.php";
		include "mainHeader.php";
		
		?>
		 
		 
		
   
		 
		
		  <div class="row">
         <div class="span6">
          <h1>All You Can Trade</h1>
		      
         <p>An Online site to exchange baby products</p>
        <!-- <p><a class="btn btn-primary btn-large">Super important &raquo;</a></p>-->
         </div><!-- .hero-unit -->
				 
         
		</div>
 <div class="row">
         <div class="span4">
 <?php 
if (isset ($_GET['login']) && $_GET['login']=="error")
	
	{  //  <a class='close' data-dismiss='alert'>×</a>
		echo "<div class='alert alert-error'>

		  <strong>Error!</strong>The username or password are wrong!
			</div>";



	}


?> 



		  
		  <form class="form-horizontal" action='../action/loginProcess.php' method="POST">
			  <fieldset>
				  <div id="legend"> <legend class="">Login</legend></div>  
				  <div class="control-group">
		         <label class="control-label"  for="username">Email</label>
				 <div class="controls">
				 <input type="email" id="email" name="email" placeholder="" class="input-xlarge">
				 </div>
				 </div>

				 <div class="control-group">
			    <label class="control-label" for="password">Password</label>
				<div class="controls">
				<input type="password" id="password" name="password" placeholder="" class="input-xlarge">
				</div>
				</div>
				<div class="control-group">  <!-- Button -->
				<div class="controls">
				<button class="btn btn-success">Login</button>
				</div>
				</div>
			</fieldset>
		</form>
		  
		  
         </div><!-- .span4 -->
   
      
   
 </div><!-- .row -->
 </div><!-- .container -->
  <script src="twitter-bootstrap-v2/docs/assets/js/jquery.js"></script>
<script src="twitter-bootstrap-v2/docs/assets/js/bootstrap-alert.js"></script>   
 </body>
</html>