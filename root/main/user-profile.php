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
		  <script src="jquery/userprofile.js"></script>
		  <link rel="stylesheet" href="css/user-profile.css">
		  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		 
	</head>
	<body>
		<!----------------------------------------Header----------------------------->
		<header>
			<nav class="navbar navbar-expand-sm bg-dark navbar-dark desktop-nav">
			  <ul class="navbar-nav header-bar">
			    <li class="nav-item active search-bar">
			      <div class="md-form active-pink active-pink-2 mb-3 mt-0">
			      	  <div class="input-group mb-3">
						  <input class="form-control" type="text" placeholder="Search" aria-label="Search">
						   <div class="input-group-append">
						    <button class="btn btn-success" type="submit">Go</button>
						  </div>
					  </div>	  
				  </div>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="unsplash-main.html">Home</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="#">Collections</a>
			    </li>
			    <li class="nav-item">
			      <button type="button" class="btn-light btn btn-outline-light text-dark submit-button mw-100 px-0">Submit a photo</button>

			    </li>

			  </ul>
			  <ul class="navbar-nav navbar-right">
			    <li>
			    	<img src="resources/images/images.png" height="50" width="50" id="icon">
			   	</li>
			  </ul> 	
			</nav>
			<!----------------------------header for tablets&phones-------------------->

			<nav class="mobile-nav" >
				  <ul class="navbar-nav navbar-left">
				    <li>
				     	<button class="btn"><i class="fa fa-home" ></i><a href="unsplash-main.html"> Home</a></button>
				    </li>
				    <li>
				     <button class="btn"> <i class="fas fa-images"></i>Collections</button>
				    </li>
				    <li >
				      <button class="btn"> <i class="fas fa-plus-square"></i>Upload</button>
				    </li>
				    
				  </ul>
				  <ul class="navbar-nav navbar-right">
			    	<li>
			    		<img src="resources/images/images.png" height="50" width="50" id="icon">
			   		</li>
			  	  </ul> 
			</nav>	
			
			
		</header>
		<!------------------User-Profile------------------------->
		<? php session_start(); ?>
		<div class="row row-1">
			<div class="col-md-4 user-image">

				<img src="<?php  session_start(); if(isset($_SESSION["user-dp"])){echo $_SESSION["user-dp"];} else { echo "resources/images/test.png";} ?>" height="150" width="150" id="profile-pic" alt="profile picture"></img>
			</div>
			<div class="col-md-8 user-description">
				<span class="display-4"><?php if(isset($_SESSION["username"])){echo $_SESSION["username"];} else{echo "Test User";} ?></span>
				<button type="button" class="btn btn-outline-dark edit-button">Edit Profile</button>
				<div class="dropdown">
				  <button type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown">
				    ...
				  </button>
				  <div class="dropdown-menu">
				    <a class="dropdown-item" href="#">Account Settings</a>
				    <a class="dropdown-item" href="#">Upload a picture</a>
				    <a class="dropdown-item" href="#">Log out</a>
				  </div>
				</div>
				<h5>Download free, beautiful high-quality photos curated by <?php  if(isset($_SESSION["username"])){echo $_SESSION["username"];} else{echo "Test User";} ?>.</h5>
			</div>
		</div>	
		<!-------------------------User-Tabs----------------------------------->
		<div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a  href="#likes" class="nav-link active" data-toggle="tab">Likes</a>
        </li>
        <li class="nav-item">
            <a  href="#collections" class="nav-link" data-toggle="tab">Collections</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="likes">
            
        </div>
        <div class="tab-pane fade" id="collections">
            
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
           <form action="script/updateprofilepic.php" action="POST" id="form-upload">
				 	<div class="form-group dp">
				      <label for="usr-dp">Upload</label><i class="fas fa-question-circle ml-1" data-toggle="tooltip" title="Upload a jpeg or png"></i>
				      <input type="file" class="form-control" id="usr-dp" name="profile-pic" accept="image/png, image/jpeg, images/jpg" data-state="0" required>
				    </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success btn-outline-light text-light" data-dismiss="modal" id="upload">Upload</button>
          <button type="button" class="btn btn-danger btn-outline-light text-light" data-dismiss="modal">Exit</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>




<!-------------------Upload Modal Ends-------------------------------->
	</body>
	</html>