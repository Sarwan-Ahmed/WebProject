<!DOCTYPE html>
<html>
<head>
	<title>Comment-Page</title>
	<!-- Latest compiled and minified CSS -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/user-profile.css">
	<link rel="stylesheet" href="css/comment-sec.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="jquery/comment-section.js"></script>
</head>
<body>
	<!-----------------------------Top bar-------------------------------->
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
				     	<button class="btn"><i class="fa fa-home"></i> Home</button>
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
	<!---------------------------------------------Photo frame-------------------------------------->
	<div class="container">
		<div class="media border p-3">
		  <img src="resources/images/images.png" alt="User" class="mr-3 mt-3 rounded-circle" style="width:60px;">
		  <div class="media-body">
		    <h4>Test User <small><i>Posted on Day/Month/Year</i></small></h4>
		    <button class="btn btn-light btn-outline-light text-dark" data-toggle="modal" data-target="#credit">Download</button>
		    <button class="btn btn-light btn-outline-light text-dark like-button"><i class="far fa-heart"></i></button>
		  </div>
	</div>  
	  <div class="container-fluid image-container">
	  		<img src="resources/images/wallpaper.jpg" width="70%" height="60%">
	  </div>	


	  <!------------------Creidts Modal--------------------->
	 <div class="modal" id="credit">
		  <div class="modal-dialog">
		    <div class="modal-content">

		      <!-- Modal Header -->
		      <div class="modal-header">
		        <h4 class="modal-title">Say Thanks</h4>
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>

		      <!-- Modal body -->
		      <div class="modal-body">
		        <p>
		        	<img src="resources/images/wallpaper.jpg" width="100" height="100">
		        	Crediting isn’t required, but is appreciated and allows photographers to gain exposure. Copy the text below.
		        </p>	
		      </div>

		      <!-- Modal footer -->
		      <div class="modal-footer">
		      	<p>
		        	<span>Photo by Test User on PixaGallery</span><button type="button" class="btn btn-light btn-outline-light text-dark" data-dismiss="modal">Copy</button>
		    	</p>
		      </div>

		    </div>
		  </div>
	</div>

</body>
</html>