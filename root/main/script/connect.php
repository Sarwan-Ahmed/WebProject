<? php
function openCon(){
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
	else{
		return $conn;
	}	
	}



?>