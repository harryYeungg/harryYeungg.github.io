<?php 
				    	
				    	if ($_POST["email"]) {
				    		$email = $_POST ["email"];

							mail ("courtionary@gmail.com" , "Requesting verification code" ,"Please send a verification code to " . $email , "From: " . $email . "\r\n" . "Reply-to: " . $email);
						


				    	}

				    
				    ?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<title>Search | Courtsearch</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link href='https://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		@import url(http://fonts.googleapis.com/css?family=Raleway:700,400);

		body {			
			background-image: linear-gradient(to bottom, rgba(0,0,0,0.4) ,rgba(0,0,0,0.4) ), url("Basketball Court Wallpapers - Wallpaper Cave.jpg");
			background-size: cover;
			background-repeat: no-repeat;
		    background-attachment: fixed;
		    background-position: center;
		   	color: white;
		   	font-family: "Rajdhani", cursive, sans-serif;

		}

		.header {
			margin-top: 20px;
		}

		li {
			display: inline;
			margin-right: 20px;

		}

		ul {
			padding-top: 16px;
			
		}

		ul  a {
			text-decoration: none;
			color: white;
		}

		ul  a:hover {
			color: orange;
			text-decoration: none;
		}


		

		.termsandprivacy  {
			color: white;
			text-decoration: none;
		}
		.termsandprivacy:hover {
			color: orange;
			text-decoration: none;
			
		}

		.glyphicon {
    font-size: 20px;
   
    margin-left: 10px;
		}		

	#courtList li{
		margin-right: 15px;


		}

		.nav li a:hover {
			background-color: transparent;
		}


		@media screen and (max-width: 768px)  {
			#courtList li  {
				display: block;
				
				text-align: center;
				margin-top: 10px;
			}

		  #courtList {
		  	padding-left: 0px;
		  	padding-right: 0px;
		  }

		 
		}

	</style>
	
</head>

<body>





	<!-- Creating the header as well as the nav bar (for non mobile device)-->
	<div class = "container header" ">
		<div class = row>
			<div class = "hidden-xs col-sm-4 col-md-4 col-lg-4" >
				<!--<h3><a href ="indexCourt.html">Court<span style = "color: orange;">Search</span></a></h3>-->
				<a href="index.php"><img src="bball final 6.png" width="220" height="130"  ></a>
			</div>
			<div class = "hidden-xs col-sm-offset-3 col-sm-5 col-md-offset-3 col-md-5 col-lg-offset-3 col-lg-5" style="text-align: right; margin-top: 31px;">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href = "aboutCourt.php">About</a></li>
					
					<!--<li><button class = "btn btn-warning btn-small" style="border-radius: 50px; border-style: none;">Sign up</button></li>-->
				</ul>
			</div>

		</div>
	</div>


	<!-- Creating the header as well as the nav bar (for mobile device)-->


  <nav class="navbar hidden-sm hidden-md hidden-lg">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="background-color: #BDC3C7 ; margin-top: 15px;">
        <span class="icon-bar" style="background-color: white;"></span>
        <span class="icon-bar" style="background-color: white;"></span>
        <span class="icon-bar" style="background-color: white;"></span>
      </button>
      <a href="index.php"><img src="bball final 6.png" width="130" height="80"  style="margin-left: 10px;"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="aboutCourt.php">About</a></li>
        
      </ul>
      
    </div>
  </div>
</nav>

	<!-- Creating about content-->

	<div class = "container" style="margin-top: 100px; " id=content>
	<div class = row style="text-align: center;">
	<h2>Choose your court.</h2>
	</div>
	<!--
	<select style="color: #808080; margin-top: 10px;">
	  <option value="Sun yat sen park" id=sunYatSen>Sun yat sen park</option>
	  <option value="Southorn playground" id=southornPlayground>Southorn playground</option>
	  <option value="Victoria park" id=victoriaPark>Victoria park</option>
	</select>
  	 <button class = "btn btn-warning btn-small" style="paddi">View</button> -->
  	 <div class = row>
  	 <ul style="font-size: 15px; display: block; margin-right: auto; margin-left: auto; text-align: center; " id=courtList >
	  	<li><a href = "sunYatSen.php"><span class="glyphicon glyphicon-map-marker" style="font-size: 14px;"></span> Sun Yat Sen Memorial Park </a></li>
	  	<li>  <a href = "southornPlayground.php"> <span class="glyphicon glyphicon-map-marker" style="font-size: 14px;"></span> Southorn Playground </a></li>
	  	 <li> <a href = "victoriaPark.php"> <span class="glyphicon glyphicon-map-marker" style="font-size: 14px;"></span> Victoria Park </a></li>
	  	  <li> <a href = "quarryBay.php"> <span class="glyphicon glyphicon-map-marker" style="font-size: 14px;"></span> Quarry Bay Basketball Court </a></li>
	</ul>
	</div>

	<!--<ul style="font-size: 15px; text-align: center; " class = "hidden-sm hidden-md hidden-lg">

	  	<li><a href = "sunYatSen.php"><span class="glyphicon glyphicon-map-marker" style="font-size: 14px;"></span> Sun Yat Sen Memorial Park </a></li>
	  	<li>  <a href = "southornPlayground.php"> <span class="glyphicon glyphicon-map-marker" style="font-size: 14px;"></span> Southorn Playground </a></li>
	  	 <li> <a href = "victoriaPark.php"> <span class="glyphicon glyphicon-map-marker" style="font-size: 14px;"></span> Victoria Park </a></li>
	  	  <li> <a href = "quarryBay.php"> <span class="glyphicon glyphicon-map-marker" style="font-size: 14px;"></span> Quarry Bay Basketball Court </a></li>
	</ul>

	</div>
	</div>-->
	
	
	

	<!-- Creating the footer-->

	<footer class = "hidden-xs" style="margin-top: 300px;" >
		
			<div class = row style="text-align: center;">
				<h6>&#9400 2017 Courtionary.Co</h6>
			</div>

			<div class = row style="text-align: center; margin-top: 0px;">
				
				<h6 style = "margin-top: 1px;"> <a href="#" class = termsandprivacy>Terms</a> | <a href="#" class = termsandprivacy>Privacy</a> </h6>
			</div>
		
	</footer>


	<footer style="margin-top: 180px;" class = "hidden-sm hidden-md hidden-lg">
		
			<div class = row style="text-align: center;">
				<h6>&#9400 2017 Courtionary.Co</h6>
			</div>

			<div class = row style="text-align: center; margin-top: 0px;">
				
				<h6 style = "margin-top: 1px;"> <a href="#" class = termsandprivacy>Terms</a> | <a href="#" class = termsandprivacy>Privacy</a> </h6>
			</div>
		
	</footer>


	</div>




</body>
</html>