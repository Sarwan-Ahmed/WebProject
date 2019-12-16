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
	    die("Connection failed: " . mysqli_connect_error());


		}
    
    $sql = 'INSERT INTO user (firstname, lastname, email, password) VALUES ('.'"'.$_POST["fname"].'"'.','.'"'.$_POST["lname"].'"'.','.'"'.$_POST["user-email"].'"'.','.'"'.$_POST["password"].'"'.');';
    if(!checkEmail($_POST["user-email"],$conn)){
		if(mysqli_query($conn,$sql)){
			$_SESSION["username"] = $_POST["fname"]." ".$_POST["lname"];
			$sql2 = "select * from user where email=".'"'.$_POST["user-email"].'"'.';';
			$result = mysqli_query($conn, $sql2);
			$row = mysqli_fetch_assoc($result);
			$_SESSION["id"] = $row["id"];
			 header('Location: http://localhost/root/main/user-profile.php');
			 exit();
			 
	}}

	else if(checkEmail($_POST["user-email"],$conn)){
		echo "Failed";
	}
         
		 
	else{
		echo "Failed";
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
	












