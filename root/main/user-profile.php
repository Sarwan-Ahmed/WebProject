<!DOCTYPE html>

	<html>
	<head>
		<title>User Profile</title>
		<!-- Latest compiled and minified CSS -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		 <link rel="stylesheet" href="css/collection.css" type="text/css">
		  <script src="jquery/userprofile.js"></script>
		  <script src="jquery/error.js"></script>
		  <link rel="stylesheet" href="css/error.css">
		  <script src="jquery/icon.js"></script>
		  <link rel="stylesheet" href="css/user-profile.css">
		   <link rel="stylesheet" href="css/imagetray.css">
		   <link rel="stylesheet" href="css/gallery.css">
         <link rel="stylesheet" href="css/searchbar.css">
		  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		 
	</head>
	<body>
		<?php 
		session_start();?>
		<!----------------------------------------Header----------------------------->
		<header>
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
  								<a class="nav-link" href="user-collection.php">Collections</a>
  					</li>
 				</ul>
 				<ul class="nav ml-auto">
 					<li class="nav-item">
 						<a class="nav-link" href="submit-photo.php"><button type="button" class="btn btn-outline-success">Submit</button></a>
 					</li>	
 					<?php
 						$userdp = "resources/images/images.png";
 							if(isset($_SESSION["user-dp"])){
								$userdp = $_SESSION["user-dp"];	}
 							echo '<li>
 									<img src='.'"'.$userdp .'"'.'height="50" width="50" id="icon">
 								  </li>';?>
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
						<button type="button" class="btn"><a href="user-collection.php" class="nav-link"><i class="fas fa-layer-group"></i></a></button>
					</li>	  
					<li class="nav-item">
						<button type="button" class="btn"><a href="submit-photo.php" class="nav-link"><i class="fas fa-plus-square"></i></a></button>
					</li>	  
					<li class="nav-item">	  
						  <button type="button" class="btn"><a href="search-mini.php" class="nav-link"><i class="fas fa-search"></i></a></button>
					</li>
					<?php
					$userdp = "resources/images/images.png";
 							if(isset($_SESSION["user-dp"])){
								$userdp = $_SESSION["user-dp"];	}
								echo
										'<ul class="nav justify-content-end">
											<li class="nav-item">	  
											 	 <img src='.'"'.$userdp.'"' .'height="50" width="50" id="icon">
											</li>
										</ul>';
					?>
				
				</ul>
			
				
				
				
			</nav>	
			<?php
						if(isset($_GET['q'])){
							$errormsg = str_replace("%"," ",$_GET['q']);
						echo '
								
								<div class="container">
									  <div class="alert alert-warning " style="margin-top: 70px !important" id="error">
    								  <strong>Error!</strong>'.$errormsg
  									  .'</div>';
											}
										?>
		</header> 
	
		<!------------------User-Profile------------------------->
		
			 
		<div class="row row-1" style="margin: 120px 0px;">
			
			<div class="col-md-4 user-image">
				<?php
				$userdp = "resources/images/images.png";
				if(isset($_SESSION["user-dp"])){
					$userdp = $_SESSION["user-dp"];	}
				
				echo '<img src='."\"".$userdp."\"".'height="150" width="150" id="profile-pic" alt="profile picture"></img>'; ?>
			</div>
			
			<div class="col-md-8 user-description">
				<span class="display-4" id="my-name"><?php if(isset($_SESSION["username"])){echo $_SESSION["username"];} else{echo "Test User";} ?></span>
				<button type="button" class="btn btn-outline-dark edit-button">Edit Profile</button>
				<div class="dropdown">
				  <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown">
				    ...
				  </button>
				  <div class="dropdown-menu">
				    <a class="dropdown-item" href="#">Account Settings</a>
				    <a class="dropdown-item" href="submit-photo.php">Upload a picture</a>
				    <a class="dropdown-item" href="script/logout.php">Log out</a>
				  </div>
				</div>
				<h5>Download free, beautiful high-quality photos curated by <?php  if(isset($_SESSION["username"])){echo $_SESSION["username"];} else{echo "Test User";} ?>.</h5>
			</div>
		</div>

		<!-------------------------User-Tabs----------------------------------->
		<div class="bs-example">
    <ul class="nav nav-tabs">
    	<li class="nav-item">
            <a  href="#collections" id="collections"class="nav-link active" style="color:black !important; " data-toggle="tab">Collections</a>
        </li>
        <li class="nav-item">
            <a  href="#likes" class="nav-link" style="color:black !important; " id="likes" data-toggle="tab">Likes</a>
        </li>
        
    </ul>
    <div class="tab-content mt-2">
    	<div class="tab-pane fade show active" id="mycollections"> 
    		<div id="gallery">
    			
			
				
  			</div>
  			<div id="overlay">
  				 <a href="user-profile.php" style="float:right;"><i class="far fa-times-circle"></i></a>
  						 <div class="media p-3">

							   <?php echo '<img src="'.$_SESSION["user-dp"].'"'.'alt="User" class="mr-3 mt-3 rounded-circle" style="width:60px;">'; ?>
							    <div class="media-body">
							      <h4 class="text-white"><?php echo $_SESSION["username"]; ?> <small><i></i></small></h4>
							      <p class="text-white" id="post-date"></p>    
							      <a id="like"><i class="fas fa-heart text-white"> 0</i></a> 
							      <a id="download"><i class="fas fa-download text-white"> Download</i></a>   
							    </div>
							  </div>
							  <div class="enlarged">	
							  		<div><img src="" width="500" height="500" id="image-tray"/></div>
							 </div>				
				</div>	
			</div>	

		</div>
				        
				        
	 </div>
</div> 
<!------------------Upload Modal--------------------------------->


<div class="container">


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-right">Upload profile picture</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        
         
        </div>
        <div class="modal-body">
           <form action="script/uploadProfilePic.php" method="POST" id="form-upload" enctype="multipart/form-data">
				 	<div class="form-group dp">
				      <label for="usr-dp">Upload</label><i class="fas fa-question-circle ml-1" data-toggle="tooltip" title="Upload a jpeg or png"></i>
				      <input type="file" class="form-control" id="usr-dp" name="profile-pic" data-state="0" required>
				      <input type="submit" class="btn btn-success btn-outline-light text-light" id="upload" value="Upload">
				    </div>

          </form>
        </div>
        <div class="modal-footer">
         
          <button type="button" class="btn btn-danger btn-outline-light text-light" data-dismiss="modal">Exit</button>
        </div>
      </div>
      
    </div>
  </div>

 




  
</div>




<!-------------------Upload Modal Ends-------------------------------->
	</body>
	</html>