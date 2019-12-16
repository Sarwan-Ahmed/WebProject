<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pixagallery";
	
	

	// Create connection
	$conn =mysqli_connect($servername, $username, $password,$dbname,"3305");

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
		}

	if (checkEmail($_GET['q'],$conn)){
		echo "*Email already in use";
		
	}




	function checkEmail($user_email,$conn){
	$sql = "SELECT email from user where email<>\"$user_email\"";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) {
	    return true;
    }
    return false;
    }

?>