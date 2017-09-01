<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home | Courtsearch</title>
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

		h3 a {
			text-decoration: none;
			color: white;
		}
		h3 a:hover {
			cursor: pointer;
			text-decoration: none;
			color: white;
		}

		.termsandprivacy  {
			color: white;
			text-decoration: none;
		}
		.termsandprivacy:hover {
			color: orange;
			text-decoration: none;
			
		}

		.nav li a:hover {
			background-color: transparent;
		}

		


	</style>
</head>

<body>

<!-- Content-->


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

	<!-- Creating the banner -->
	<div class = container style="margin-top: 60px;  ">
		<div class = row style="text-align: center;">
			<div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h2 > Feel the atmosphere. </h2>
				<h4 >Sign up for free now and enjoy the real-time information of basketball courts ! </h4>
			</div>
		</div>
		
	</div>


	<!-- Creating the buttons-->
	
	
	<div class = container>
  	<div class = row style="margin-top: 30px;  text-align: center;">
		
		<button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#signUpModal" style=" padding-left: 75px; padding-right: 75px;">Sign Up</button>


			<div id="signUpModal" class="modal fade" role="dialog">
			<div class="modal-dialog">

	
			    <div class="modal-content" style="color: #808080;">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">You would need a verification code to search for courts. Enter your email and it will be sent to you. Start now !</h4>
			      </div>
			      <form action="searchCourt.php" method="post" id=signUpForm>
				      <div class="modal-body" style="text-align: center;">
				        
				        <input type="text" name="email" value=""  >
				        <input type = "submit" name = "submit" value = "Sign Up" id="signUpButton">
				        </h4>
				        
				     
				  </form>

				    

				    <!--
				      <div class="modal-footer">
				         <input type="submit" class="btn btn-default" value = "Sign Up" data-dismiss="modal" style="color: #808080;"></input>
				      </div> -->
				  
			    </div>
			</div>
			</div>

  	</div>

	<div class = row style="margin-top: 10px; text-align: center;">
		
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="padding-left: 81px; padding-right: 81px; background-color: #3498DB; border-style: none; " id=logInButton1 >Log In</button>

		
			<div id="myModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">

			    
			     <div class="modal-content" style="color: #808080;">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Enter the past verification code we sent to you and start searching court now !</h4>
			      </div>
			      
				      <div class="modal-body" style="text-align: center;">
				        <h4>Verification code: 
				        <input id = code type="text" name="email" value="" >
				        </h4>
				        
				      </div>
				      <div class="modal-footer">
				       
				        <button id = logInButton2 type="button" class="btn btn-default" data-dismiss="modal" style="color: #808080;">Log In</button>
				      </div>
			      
			    </div>
			  </div>

  	</div>
  	</div>
  	</div>


	
	

	<!-- Creating the footer-->

	<footer  class = "hidden-xs hidden-md hidden-sm" style="margin-top: 220px;" >
		
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

	<footer style="margin-top: 260px;" class = "hidden-xs hidden-sm hidden-lg">
		
			<div class = row style="text-align: center;">
				<h6>&#9400 2017 Courtionary.Co</h6>
			</div>

			<div class = row style="text-align: center; margin-top: 0px;">
				
				<h6 style = "margin-top: 1px;"> <a href="#" class = termsandprivacy>Terms</a> | <a href="#" class = termsandprivacy>Privacy</a> </h6>
			</div>
		
	</footer>

		<footer style="margin-top: 300px;" class = "hidden-xs hidden-md hidden-lg">
		
			<div class = row style="text-align: center;">
				<h6>&#9400 2017 Courtionary.Co</h6>
			</div>

			<div class = row style="text-align: center; margin-top: 0px;">
				
				<h6 style = "margin-top: 1px;"> <a href="#" class = termsandprivacy>Terms</a> | <a href="#" class = termsandprivacy>Privacy</a> </h6>
			</div>
		
	</footer>






<script type="text/javascript">
	document.getElementById("logInButton1").addEventListener("mouseover" , hover);
	function hover () {
		document.getElementById("logInButton1").style.backgroundColor = "#2874A6";
	}
	document.getElementById("logInButton1").addEventListener("mouseout" , changeBackColor);
	function changeBackColor () {
		document.getElementById("logInButton1").style.backgroundColor = "#3498DB";
	}
	document.getElementById("logInButton2").addEventListener("click" , submitCode);
	function submitCode() {
		if (document.getElementById("code").value == 66999) {
			location.href = "searchCourt.php" ;
		}
		else {
			alert("Wrong verification code !")
		}
	}

	document.getElementById("signUpButton").addEventListener("click" , signUpAlert);
	function signUpAlert () {
		alert ("Thank you for signing up ! Start searching your court now !");
	}



	/*$("#signUpForm").submit(function(e) {
    e.preventDefault();
}); */
</script>


<script src = "jquery-3.2.1.js"></script>
</body>
</html>