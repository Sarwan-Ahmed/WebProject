<?php 

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pixagallery";
	
	 
	//include "duplicatemail.php";
    //include("C:\xampp\php\PEAR\initcontrols\header_myworks.php");
    
	session_start();	

	// Create connection
	$conn =mysqli_connect($servername, $username, $password,$dbname,"3305");

	// Check connection
	if (!$conn) {
	    header('Location: http://localhost/root/main/signup.php?q="Server Error!! Please try again later."');
		exit();


		}
	
    
    $sql = 'INSERT INTO user (firstname, lastname, email, password) VALUES ('.'"'.$_POST["fname"].'"'.','.'"'.$_POST["lname"].'"'.','.'"'.$_POST["user-email"].'"'.','.'"'.$_POST["password"].'"'.');';
    if(!checkEmail($_POST["user-email"],$conn)){
		if(mysqli_query($conn,$sql)){
			$_SESSION["username"] = $_POST["fname"]." ".$_POST["lname"];
			$sql2 = "select * from user where email=".'"'.$_POST["user-email"].'"'.';';
			$result = mysqli_query($conn, $sql2);
			$row = mysqli_fetch_assoc($result);
			$_SESSION["user-dp"] = $row["profile_picture"];
			$_SESSION["id"] = $row["id"];
			mkdir("resources/collection/".$_SESSION["id"]);
			 header('Location: http://localhost/root/main/login.php');
			 exit();
			 
	}}

	else if(checkEmail($_POST["user-email"],$conn)){
		echo "Email already exists!";
	}
         
		 
	else{
		 header('Location: http://localhost/root/main/signup.php?q="Server Error!! Please try again later."');
		 exit();
	}

   
    
   
	function checkEmail($user_email,$conn){
	$sql = "SELECT Email from user where Email=\"$user_email\"";
	$result = mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0) {
	    return true;
    }
    return false;
    }

    



	





?>
	












