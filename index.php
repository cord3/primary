<?php
	session_start();
	include ('system/config.php');
	
	if(isset($_SESSION['userCord3'])) {
		$loggedin = true;
		header('Location: ./user/');
	} else {
		$loggedin = false;
	}
?>

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

  <head>  	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
	<meta name="description" content="fresh Gray Bootstrap 3.0 Responsive Theme "/>
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap,Bootstrap 3.0 Responsive Login" />
	<meta name="author" content="Adsays"/>
    <link rel="shortcut icon" href="favicon.png"> 
    
	<title>Cord3 - Login</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Demo CSS -->
    <link href="css/demo.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/login-theme-1.css" rel="stylesheet" id="fordemo">
    <link href="css/login-theme-9.css" rel="stylesheet" id="fordemo">
    
    <link href="css/animate-custom.css" rel="stylesheet"> 
    
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	<!-- The Google Font we use throughout Cord3 -->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,400' rel='stylesheet' type='text/css'>
	
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
  </head>
    <body class="fade-in">
    	
    	<!-- start Login box -->
    	<div class="container" id="login-block">
    		<div class="row">
			    <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">
			    	 
			       <div class="login-box clearfix animated flipInY">
			       		
			        	<div class="login-logo">
								<h2>Welcome to Cord3</h2>
			        	</div> 
			        	
			        	<div class="login-form">
			        		<!-- Start Error box -->
							<div class="alert alert-danger hide">
								  <button type="button" class="close" data-dismiss="alert"> &times;</button>
								  <h4>Error!</h4>
								   Your account is disabled or has not been approved yet.
							</div> <!-- End Error box -->
			        		<form action="cord3.html" method="post"  >
						   		 <input type="text" placeholder="User name" class="input-field" id="username_monkeyshout" name="username_monkeyshout" required/> 
						   		 <input type="password"  placeholder="Password" class="input-field" id="password_monkeyshout" name="password_monkeyshout" required/> 
						   		 <button type="submit" class="btn btn-login">Login</button> 
							</form>	
							
							<div class="text-center text-white">
								<p>Cord3 is still under development!</p>
								<p>You cannot create an account.</p>
							</div>
							
							<div class="login-links hidden"> 
					            <a href="forgot-password.php">
					          	   Forgot password?
					            </a>
					            <br />
					            <a href="sign-up.php">
					              Don't have an account? <strong>Sign Up</strong>
					            </a>
							</div>      		
			        	</div> 			        	
			       </div>
			       
			        
			    </div>
			</div>
    	</div>
     
      	<!-- End Login box -->
     	<footer class="container">
     		<p id="footer-text"><small></small></p>
     	</footer>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script> 
        <script src="js/bootstrap.min.js"></script> 
        <script src="js/placeholder-shim.min.js"></script>        
        <script src="js/custom.js"></script>
    </body>
</html>
