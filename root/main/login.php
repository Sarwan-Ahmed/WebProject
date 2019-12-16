</!DOCTYPE html>
<html>
<head>
	<title>Login | PixaGallery</title>
	 <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="jquery/login.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	  <style>
	  		body{
	  			background: url("resources/images/login.jpg");
	  			background-size: 100% 100%;
	  		}
	  		#anchor{
	  			text-decoration: underline;
	  			color: grey;
	  		}
	  		.display-1{
	  			text-align: center;
	  		}

			/* The element to apply the animation to */
			.login-failed {
			  width: 100%;
			  height: 5%;
			  color: red;
			  background-color: rgb(0,0,0,0.5);
			  position: absolute;
			  top:0px;
			  left:0px;
			  z-index:1;
			  text-align: center;
			 
			}
	  </style>	
</head>
<?php
	if(isset($_GET['q'])){
		echo '
			<div class="login-failed"><p class=" align-middle">Login failed!! Either User Name or Password is incorrect.<p></div>
		';
	}
?>
<!------------------------LOGIN HEADINGS---------------------->
<h1 class="display-1 text-white">PixaGallery</h1>
<!------------------------LOGIN FORM-------------------------->
<body>
	<div class="container">
	  <form action="script/login.php" method="POST">
	    <div class="form-group">
	      <label for="usr">Email Address</label>
	      <input type="text" class="form-control" id="usr" name="username">
	    </div>
	    <div class="form-group">
	      <label for="pwd">Password: <a id="anchor">Forgot?</a></label>
	      <input type="password" class="form-control" id="pwd" name="password">
	    </div>
	    <button type="submit" class="btn btn-primary">Login</button>
	  </form>
	  <h6>Don't have an account? <a id="anchor" href="signup.php">Join</a></h6>
	</div>
<!-----------------------END OF LOGIN PAGE----------------------->
</body>
</html>