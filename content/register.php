<!DOCTYPE html>
 <html>
 <head>
         <meta charset="utf-8">
         <title>All You Can Trade</title>
         <link rel="stylesheet" href="http://flip.hr/css/bootstrap.min.css">
		 <script type="text/javascript" src="js/registerForm.js"></script>
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
		  
		  <form class="form-horizontal" action='../action/registerProcess.php' method="POST" onsubmit=" return validatePassword();">
		  <fieldset>   <div id="legend">   <legend class="">Register</legend>
		  </div> 
		  <div id = "feedback">                          
		  </div> 
		  <div class="control-group">  <!-- Username -->
		   <label class="control-label"  for="username">Username</label>
		  <div class="controls">
		  <input type="text" id="username" name="username" pattern="^[a-z0-9_-]{3,}" placeholder="" class="input-xlarge" required>
		  <p class="help-block">Username can contain any letters or numbers, without spaces</p>
		  </div>
		  </div>
		  
		    <div class="control-group">      <!-- Password-->
		  <label class="control-label" for="password">Password</label>
		  <div class="controls">
		  <input type="password" id="password" name="password" pattern=".{3,}" placeholder="" class="input-xlarge" 
		    onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Password must contain at least 3 characters ' : '');
  if(this.checkValidity()) form.password_confirm.pattern = this.value;"

		  required>
		  <p class="help-block">Password should be at least 4 characters</p>
		  </div>   
		  </div>
		  
		    <div class="control-group">   <!-- Password -->
		  <label class="control-label"  for="password_confirm">Password (Confirm)</label>
		  <div class="controls">
		  <input type="password" id="password_confirm" name="password_confirm" pattern=".{3,}" placeholder="" class="input-xlarge" 
		  onchange="
  this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');
     "

		  required>
		  <p class="help-block">Please confirm password</p>
		  </div>
		  </div>  
				  
		  <div class="control-group">
		  <!-- E-mail -->
		  <label class="control-label" for="email">E-mail</label>
		  <div class="controls">
		  <input type="email" id="email" name="email" placeholder="" class="input-xlarge" required>
		  <p class="help-block">Please provide your E-mail</p>
		  </div>
		  </div>
		  
			
		
		 <div class="control-group">  <!-- major -->
		
		 <label class="control-label"  for="zip">Zip Code</label>
	 <div class="controls">
	  <input type="number" id="zip" name="zip" placeholder="For example 11511" class="input-xlarge">
		  <p class="help-block">5 digits zip code</p>
		 </div>
		</div>
		
	
		
		
		  <div class="control-group">   <!-- Button -->
		  <div class="controls">
		  <button class="btn btn-success">Register</button>
		  </div>   
		  </div> 
		  </fieldset>
		  </form>
		  
		  
         </div><!-- .span4 -->
   
      
   
 </div><!-- .row -->
 </div><!-- .container -->
     
	 <script type = "text/javascript" src = "js/jQuery.js"></script> 
	 <style type = "text/css">             
	 #feedback{                      
	 line-height:                     
     }               
	 </style>       
	 <script type = "text/javascript">             
	 $(document).ready(function(){ //when the document is ready, run the function 
	 $('#feedback').load('../action/registerProcess.php').show();                      
	 $('#username').keyup(function(){             
	 $.post('../action/registerProcess.php', { username: form.username.value },   
	 function(result){                                                
	 $('#feedback').html(result).show();                 
	 });                                                          
	 });                      
	 });                
	 </script> 
	 
	 
	 
 </body>
</html>