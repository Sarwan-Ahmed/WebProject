</!DOCTYPE html>
<html>
<head>
	<title>Login | PixaGallery</title>
	 <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <link rel="stylesheet" href="css/searchbar.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <link rel="stylesheet" href="css/login.css">
	  <link rel="stylesheet" href="css/error.css">
	  <script src="jquery/error.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
<?php session_start();?>

<!-------------------------------NAV BAR LOGIN-------------------------------->
	

			<div class="header">
			<!-------------------------------------NAVBAR FOR DESKTOP------------------------------>
					<nav class="navbar bg-dark fixed-top navbar-dark desktop">
						<a class="navbar-brand" href="unsplash-main.php"><h6 class="display-5">PixaGallery</h6></a>
						<ul class="nav mr-auto">
							<li class="nav-item">
								<form class="form-inline">
								    <div class="input-group">
								      <div class="input-group-prepend">
								        <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
								      </div>
								      <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
								    </div>
				 				 </form>
			 				</li>
			 				<li class="nav-item">
		    					<a class="nav-link" href="unsplash-main.php">Home</a>
		  					</li>
		  					<li class="nav-item">
		  						 <a class="nav-link" href="user-collection.php">Collections</a>
		  					</li>
		  					<li class="nav-item dropdown">
							      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
							        Photo categories
							      </a>
							      <div class="dropdown-menu">
							        <a class="dropdown-item" href="user-collection.php?q=Nature">Nature</a>
							        <a class="dropdown-item" href="user-collection.php?q=Wallpapers">Wallpapers</a>
							        <a class="dropdown-item" href="user-collection.php?q=Textures and Patterns">Textures and Patterns</a>
							        <a class="dropdown-item" href="user-collection.php?q=Current Events">Current Events</a>
							        <a class="dropdown-item" href="user-collection.php?q=Architecture">Architecture</a>
							        <a class="dropdown-item" href="user-collection.php?q=Business and Work">Business and Work</a>
							        <a class="dropdown-item" href="user-collection.php?q=Film">Film</a>
							        <a class="dropdown-item" href="user-collection.php?q=Animals">Animals</a>
							        <a class="dropdown-item" href="user-collection.php?q=Travel">Travel</a>
							        <a class="dropdown-item" href="user-collection.php?q=Fashion">Fashion</a>
							        <a class="dropdown-item" href="user-collection.php?q=Food and Drink">Food and Drink</a>
							        <a class="dropdown-item" href="user-collection.php?q=Spirituality">Spirituality</a>
							        <a class="dropdown-item" href="user-collection.php?q=Experimental">Experimental</a>
							        <a class="dropdown-item" href="user-collection.php?q=People">People</a>
							        <a class="dropdown-item" href="user-collection.php?q=Health">Health</a>
							        <a class="dropdown-item" href="user-collection.php?q=Arts and Culture">Arts and Culture</a>
							          <a class="dropdown-item" href="user-collection.php?q=Technology">Technology</a>

							      </div>
							    </li>	
		 				</ul>
		 				<ul class="nav ml-auto">
		 					<li class="nav-item">
		 						<?php
		  							if(isset($_SESSION["username"])){
		  								echo '<a class="nav-link" href="submit-photo.php"><button type="button" class="btn btn-outline-success">Submit</button></a>';}
		  							else{
		  								echo '<a class="nav-link" href="login.php"><button type="button" class="btn btn-outline-success">Submit</button></a>';
		  							}	
		    					
		    					?>
		 					</li>	
		 					<?php
		 						$userdp = "resources/images/images.png";
		 						if(isset($_SESSION["username"])){
		 							if(isset($_SESSION["user-dp"])){
										$userdp = $_SESSION["user-dp"];	}
		 							echo '<li>
		 									<img src='.'"'.$userdp .'"'.'height="50" width="50" id="icon">
		 								  </li>';
		 						}
		 						else{
		 							echo '<li>
		 									<a class="nav-link" href="login.php"><button type="button" class="btn btn-outline-success">Login</button></a>
		 								</li>
		 								<li>
		 									<a class="nav-link" href="signup.php"><button type="button" class="btn btn-outline-success">Join Free</button></a>
		 								</li>
		 								';
		 						}
		 					?>

		 					<!-- Dropdown -->
							    








		 				</ul> 
		 				
					</nav>







					<!-----------------------------------END OF NAVBAR FOR DESKTOP----------------------------------------------------------->
					<!-----------------------------------NAVBAR FOR TABLETS&MOBILEPHONES----------------------------------------------------->
			<nav class="navbar bg-light navbar-light mob-tab fixed-top">
				<ul class="nav justify-content-center">
					<!----------
					<li class="nav-item ">
						<i class="fas fa-home"></i>
					</li>
					<li class="nav-item">
						<i class="fas fa-layer-group"></i>
					</li>------------>
					
					<li class="nav-item">
						<!----<div class="btn-group btn-group-lg">--->
						  <button type="button" class="btn"><a href="unsplash-main.php" class="nav-link"><i class="fas fa-home"></i></a></button>
					</li>	  
					<li class="nav-item">	  
						<?php
							if(isset($_SESSION["username"])){
						 		echo '<button type="button" class="btn"><a href="user-collection.php" class="nav-link"><i class="fas fa-layer-group"></i></a></button>';}
						 	else{
						 		echo '<button type="button" class="btn"><a href="login.php" class="nav-link"><i class="fas fa-layer-group"></i></a></button>';
						 	}	

						  ?>
					</li>	 
					<!--------------------------------------------BELOW------------------------------------------->
					<li class="nav-item dropdown">
							      <a class="nav-link dropdown-toggle" style="padding-top:15px;" href="unsplash-main.php" id="navbardrop drop" data-toggle="dropdown">
							        <i class="fas fa-images"></i></a>
							      </a>
							      <div class="dropdown-menu">
							        <a class="dropdown-item" href="user-collection.php?q=Nature">Nature</a>
							        <a class="dropdown-item" href="user-collection.php?q=Wallpapers">Wallpapers</a>
							        <a class="dropdown-item" href="user-collection.php?q=Textures and Patterns">Textures and Patterns</a>
							        <a class="dropdown-item" href="user-collection.php?q=Current Events">Current Events</a>
							        <a class="dropdown-item" href="user-collection.php?q=Architecture">Architecture</a>
							        <a class="dropdown-item" href="user-collection.php?q=Business and Work">Business and Work</a>
							        <a class="dropdown-item" href="user-collection.php?q=Film">Film</a>
							        <a class="dropdown-item" href="user-collection.php?q=Animals">Animals</a>
							        <a class="dropdown-item" href="user-collection.php?q=Travel">Travel</a>
							        <a class="dropdown-item" href="user-collection.php?q=Fashion">Fashion</a>
							        <a class="dropdown-item" href="user-collection.php?q=Food and Drink">Food and Drink</a>
							        <a class="dropdown-item" href="user-collection.php?q=Spirituality">Spirituality</a>
							        <a class="dropdown-item" href="user-collection.php?q=Experimental">Experimental</a>
							        <a class="dropdown-item" href="user-collection.php?q=People">People</a>
							        <a class="dropdown-item" href="user-collection.php?q=Health">Health</a>
							        <a class="dropdown-item" href="user-collection.php?q=Arts and Culture">Arts and Culture</a>
							        <a class="dropdown-item" href="user-collection.php?q=Technology">Technology</a>

							      </div>
							    </li>
					<!-----------------------------------------------ABOVE------------------------------------------------->		     
					<li class="nav-item">
						<?php
						if(isset($_SESSION["username"])){ 	
						  echo '<button type="button" class="btn"><a href="submit-photo.php" class="nav-link"><i class="fas fa-plus-square"></i></a></button>';}
						 else{
						 	  echo '<button type="button" class="btn"><a href="login.php" class="nav-link"><i class="fas fa-plus-square"></i></a></button>';
						 	} 
						  ?>
					</li>	  
					<li class="nav-item">	  
						  <button type="button" class="btn"><a href="search-mini.php" class="nav-link"><i class="fas fa-search"></i></a></button>
					</li>
					<?php
					$userdp = "resources/images/images.png";
 						if(isset($_SESSION["username"])){
 							if(isset($_SESSION["user-dp"])){
								$userdp = $_SESSION["user-dp"];	}
								echo
										'<ul class="nav justify-content-end">
											<li class="nav-item">	  
											 	 <img src='.'"'.$userdp.'"' .'height="50" width="50" id="icon">
											</li>
										</ul>';
					}?>
				</ul>
			
				
				
				
			</nav>
				
				<?php
				if(!isset($_SESSION["username"])){
				echo '<nav class="navbar bg-light navbar-light mob-tab second-nav">
					<ul class="nav justify-content-center">
						<li class="nav-item">
							<a class="nav-link" href="login.php"><button type="button" class="btn btn-success">Login</button></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="signup.php"><button type="button" class="btn btn-dark">Signup</button></a>
						</li>	
					</ul>	
					</nav>';}?>
			
		
		</div>		





<!--------------------------------END------------------------------------------->
<!------------------------LOGIN HEADINGS---------------------->

<!------------------------LOGIN FORM-------------------------->

	<div><h1 id="main-heading" style="margin-top:100px;">PixaGallery</h1></div>
	
	
	<div class="container mt-5">
	<?php	
	if(isset($_GET['q'])){
		echo '
			<div class="container mb-3" id="error"><p class="align-middle">Login failed!! Either User Name or Password is incorrect.<p></div>
		';
	}?>
	  <form action="script/login.php" method="POST">
	    <div class="form-group">
	      <label for="usr">Email Address</label>
	      <input type="text" class="form-control" id="usr" name="username">
	    </div>
	    <div class="form-group">
	      <label for="pwd">Password: <a id="anchor" href="#">Forgot?</a></label>
	      <input type="password" class="form-control" id="pwd" name="password">
	    </div>
	    <button type="submit" class="btn btn-dark">Login</button>
	  </form>
	  <h6>Don't have an account? <a id="anchor" href="signup.php">Join</a></h6>
	</div>
<!-----------------------END OF LOGIN PAGE----------------------->
</body>
</html>
