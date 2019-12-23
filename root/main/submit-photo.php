<!DOCTYPE html>
<html>
<head>
	<title>Submit your photo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		  <script src="jquery/icon.js"></script>
		   <script src="jquery/error.js"></script>
         <link rel="stylesheet" href="css/searchbar.css">
           <link rel="stylesheet" href="css/error.css">
  		  <link rel="stylesheet" href="css/photo-upload.css">
		  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

		<header>
			<?php session_start(); ?>
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
						      <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
						    </div>
		 				 </form>
	 				</li>
	 				<li class="nav-item">
    					<a class="nav-link" href="unsplash-main.php">Home</a>
  					</li>
  					<li class="nav-item">
  						<?php
  							if(isset($_SESSION["username"])){
  								echo '<a class="nav-link" href="user-collection.php">Collections</a>';}
  							else{
  								echo '<a class="nav-link" href="login.php">Collections</a>';
  							}	
    					
    					?>
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
		</header> 
		<!--------------------------------------------END OF HEADER------------------------------------------------->

		<!--------------------------------------------START OF PICTURE UPLOAD-------------------------------------->
		<div class="container pic-tray">
		</div>
		<div class="container form-container" style="margin-top:100px !important;">
			  <form action="script/updateCollection.php" method="POST" id="form-upload" enctype="multipart/form-data">
				 	  <div class="form-group">
				      <label for="usr-dp">Upload</label><i class="fas fa-question-circle ml-1" data-toggle="tooltip" title="Upload a jpeg, jpg or png"></i>
				      <input type="file" class="form-control" id="photo-upload" name="collection-upload" data-state="0" style="padding:2px;" required>
				       <label for="comment">Description:</label>
  					   <textarea class="form-control" rows="5" id="description" name="desc"></textarea>
  					   <label for="category">Select category:</label>
						<select class="form-control" id="category" name="cat">
						    <option>Uncategorized</option>
						    <option>Nature</option>
						    <option>Wallpapers</option>
						    <option>Textures and Patterns</option>
						    <option>Current Events</option>
						    <option>Architecture</option>
						    <option>Business and Work</option>
						    <option>Film</option>
						    <option>Animals</option>
						    <option>Travel</option>
						    <option>Fashion</option>
						    <option>Food and Drink</option>
						    <option>Spirituality</option>
						    <option>Experimental</option>
						    <option>People</option>
						    <option>Health</option>
						    <option>Arts and Culture</option>
						    <option>Technology</option>
						</select>
				      <input type="submit" class="btn btn-success btn-outline-light text-light mt-1" id="upload" value="Upload">
				      <a href="javascript:history.back()" id="cancel">Cancel</a>
				    </div>
				    <?php
						if(isset($_GET['q'])){
							$errormsg = str_replace("%"," ",$_GET['q']);
						echo '
								<div class="container mb-3" id="error"><p class="align-middle">'.$errormsg.'<p></div>
									';
											}
										?>

          </form>
		</div>	
</body>
</html>
