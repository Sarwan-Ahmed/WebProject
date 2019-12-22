<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pixagallery";
	session_start();
	 
	

	// Create connection
	$conn =mysqli_connect($servername, $username, $password,$dbname,"3305");

	// Check connection
	if (!$conn) {
	    header('Location: http://localhost/root/main/user-profile.php?q="Either Email or Password is incorrect!!"');
		exit();
	}
	if(str_replace("%"," ",$_GET['q']) == "Collection"){
		getCollectionJSON($conn,$_SESSION["id"]);
	}
	else{
		getPhotosJSON($conn,str_replace("%"," ",$_GET['q']));
	}	




	function getPhotosJSON($conn,$category){
			$sql= ' Call getPictures('.'"'.$category.'"'.');';
			$result = mysqli_query($conn,$sql);
			$json = json_encode((mysqli_fetch_all($result, MYSQLI_ASSOC)));
			echo $json;	
	}

	function getCollectionJSON($conn,$id){
			$sql= ' Call getCollection('.$id.');';
			$result = mysqli_query($conn,$sql);
			$json = json_encode((mysqli_fetch_all($result, MYSQLI_ASSOC)));
			echo $json;	
	}




?>