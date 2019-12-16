<!DOCTYPE html>
<html>
<head>
	<title>Join PixaGallery | PixaGallery</title>
	 <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	  <script src="jquery/signup.js"></script>
	  <link rel="stylesheet" href="css/signup.css" type="text/css">
	  <script src="jquery/loadbar.js"></script>
	  <script src="jquery/tooltip.js"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	 
</head>
<body>
	<div class="row">
		<!-----------------LEFT COLUMN---------------------------------------------->
		<div class="col-md-6" id="left-column">
			<p>
				<h4 class="display-4 text-white ml-5" >Creation starts here</h3>
				<h5 class="display-5 text-white ml-5">Access free, high-resolution photos you can’t find anywhere else</h5>	
			</p>		
		</div>
		<!------------------END OF LEFT COLUMN------------------------------------->

		<!----------------SIGN-UP FORM--------------------------------------------->
		<div class="col-md-6 " id="right-column">
			<!-------------------------------------Progress Bar------------------------------>
			<div class="container mt-3 ml-3 mr-3">
				<div class="progress">
				  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0"
				  aria-valuemin="0" aria-valuemax="100" style="width:0%">
				    0% Complete
				  </div>
				</div>
			</div>	
			<!-----------------------------------/Progress Bar------------------------------->
			<div class="container ml-3 mr-3">
			
				 <h2 class="display-2">Join Free</h2>
				 <h5 class="display-5">Already have an account? <a href="login.html">Login</a> </h5>
				 <!----  --->
				 <form action="script/signup.php"  id="myForm" method="POST">
				 	<div class="form-group fname">
				      <label for="usr-fname">First Name  </label><i class="fas fa-question-circle ml-1" data-toggle="tooltip" title="Ensure proper capitalization"></i>
				      <input type="text" class="form-control" id="usr-fname" name="fname" data-state="0" required>
				    </div>
				    <div class="form-group lname">
				      <label for="usr-lname">Last Name </label><i class="fas fa-question-circle ml-1" data-toggle="tooltip" title="Ensure proper capitalization"></i>
				      <input type="text" class="form-control" id="usr-lname" name="lname" data-state="0" required> 
				    </div>  
				    <div class="form-group email">
				      <label for="usr-email">Email Address</label><i class="fas fa-question-circle ml-1" data-toggle="tooltip" title="Enter a valid email address"></i>
				      <input type="email" class="form-control" id="usr-email" name="user-email" data-state="0" required>
				    </div>
				    <div class="form-group pwd">
				      <label for="pwd">Password:</label><i class="fas fa-question-circle ml-1" data-toggle="tooltip" title="Password should be at least 6 characters long with at least one number, one lowercase and one uppercase letter"></i>
				      <input type="password" class="form-control" id="pwd" name="password" data-state="0" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required>
				    </div>
				    <input type = "submit" id="join" class="btn btn-dark btn-block mb-3" value="Join">
		 		 </form>
		 	 </div>
		</div>	
		<!--------------------END OF SIGN-UP FORM--------------------------------->
	</div>	
</body>	