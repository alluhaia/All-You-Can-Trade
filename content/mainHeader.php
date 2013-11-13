<?php
				
		 if (isset($_SESSION['user_id'])) {
		//get the user information
		 $userInfo=$users->getUserByID(trim($_SESSION['user_id']));
			
		 echo "Hi ". $userInfo['username'];

		 $loggedIn=true;
		  
		  echo "<div id='logOut' style='margin-left:95%;'>";
 
		  echo "<a href='/is302/content/logOut.php'>log Out </a></div>";
		 
		 }
		 
		 if ( $loggedIn == false ) {
		 ?>
   
   <a href="/is302/content/login.php">Sign in</a> or <a href="/is302/content/register.php">register </a>
		
		 <?php
		 }
		 ?>
		 
		 <div class="navbar">
			<div class="navbar-inner">
			<div class="brand ">Baby Equipment</div>
			<ul class="nav">
				<li class=""><a href="/is302/index.php">Home</a></li>   
				<li><a href="#">My account</a></li>
				<li><a href="/is302/content/post.php">Post</a></li>
			</ul> 
			</div>
		</div>