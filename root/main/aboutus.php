<html>
<head>
	<title>About Us!</title>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="css/About-us.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
			  	
			</nav>
			<!------------------------------Header for tablets and mobile phones-------------------------->
		
			
			
		</header>





		<div class="Container">
			<h1 class="display-1 text-center border border-top-0 border-right-0 border-left-0">About-Us</h1>
			<h4 class="text-center">PixaGallery is our semester project for web development course</h4>
		</div>	
		<!--------------Carousel-------------------------->
		<div id="demo" class="carousel slide" data-ride="carousel">

		  <!-- Indicators -->
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		    <li data-target="#demo" data-slide-to="3"></li>
		  </ul>
		  
		  <!-- The slideshow -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="resources/images/aamir.jpg" alt="Aamir" width="1100" height="500">
		      <div class="caption"><h4>Aamir Farooq Khan</h4></div>
		    </div>
		    <div class="carousel-item">
		      <img src="resources/images/sarwan.jpg" alt="Sarwan" width="1100" height="500">
		      <div class="caption"><h4>Sarwan Ahmed</h4></div>
		    </div>
		    <div class="carousel-item">
		      <img src="resources/images/ismail.jpg" alt="Ismail" width="1100" height="500">
		      <div class="caption"><h4>Syed Ismail Shah</h4></div>
		    </div>
		    <div class="carousel-item">
		      <img src="resources/images/abdullah.jpg" alt="Abdullah" width="1100" height="500">
		       <div class="caption"><h4>Muhammad Abdullah</h4></div>
		    </div>
		  </div>
		  
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
		</div>
</body>
</html>