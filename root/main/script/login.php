<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pixagallery";
	$user_mail = $_POST["username"];
	$password  = $_POST["password"];
	 
	//include "duplicatemail.php";
    //include("C:\xampp\php\PEAR\initcontrols\header_myworks.php");
    session_destroy();
	session_start();	

	// Create connection
	$conn =mysqli_connect($servername, $username, $password,$dbname,"3305");

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
		}

	if(checkEmail($user_mail,$conn) && checkPassword($password,$conn)){
			$sql = "Select * from user where email=".'"'.$user_mail.'"';
			$result = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($result)){
				$_SESSION["username"] = $row["firstname"]." ".$row["lastname"];
				$_SESSION["user-dp"] = $row["profile_picture"];
				$_SESSION["id"] = $row["id"];
				header('Location: http://localhost/root/main/user-profile.php');
				exit();
			}
	}

	else{
		header('Location: http://localhost/root/main/login.php?q="Either Email or Password is incorrect!!"');
		exit();
	}	
    
    
    
  
    


		function checkEmail($email,$conn){
			$sql = "select * from user where email=".'"'.$email.'"';
			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) > 0) {
	    		return true;
    			}
    		return false;
    		}
		
	
		function checkPassword($password,$conn){
			$sql = "select * from user where password=".'"'.$password.'"';
			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) > 0) {
	    		return true;
    			}
    		return false;
    		}
		





?>
	












