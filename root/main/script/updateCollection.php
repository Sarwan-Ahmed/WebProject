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
	    header('Location: http://localhost/root/main/signup.php?q="Either Email or Password is incorrect!!"');
		exit();
	}

	/*----------------Code for checking whether uploaded picture is really an image file------------------------ */
	$target_dir = "resources/collection/".$_SESSION["id"].'/';
	$target_file = $target_dir .$_FILES["collection-upload"]["name"];
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["collection-upload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["collection-upload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    header('Location: http://localhost/root/main/submit-photo.php?q=Sorry, only JPG, JPEG, and PNG files are allowed.');
	exit();
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header('Location: http://localhost/root/main/submit-photo.php?q=Sorry, your file was not uploaded.');
    exit();
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["collection-upload"]["tmp_name"], $target_file)) {
    	 $fileurl = "script/".$target_dir .$_FILES["collection-upload"]["name"];
    	 if(updateCollection($conn,$_SESSION["id"],$_FILES["collection-upload"]["name"],$_POST["desc"],$_POST["cat"],"script/".$target_dir .$_FILES["collection-upload"]["name"])){
    	 	//$_SESSION["user-dp"] = "script/".$target_dir .$_FILES["collection-upload"]["name"];
    	 	header('Location: http://localhost/root/main/user-profile.php');
    	 	 exit();
    	 }
    	 else{
    	 	header('Location: http://localhost/root/main/submit-photo.php?q=Server Error! Please try again later.');
    	 	exit();
    	 }
         
        
    } else {
        header('Location: http://localhost/root/main/submit-photo.php?q=Sorry there was an error uploading your file! Please try again later.');
    }
}
	
function updateCollection($conn,$uploader_id,$pic_name,$pic_description,$pic_category,$pic_url){
	$sql = 'Call updateCollection('.$uploader_id.','.'"'.$pic_name.'"'.','.'"'.$pic_description.'"'.','.'"'.$pic_category.'"'.','.'"'.$pic_url.'"'.','.'"'.date("Y/m/d").'"'.');';
	if(mysqli_query($conn,$sql)){
		return true;
	}
	else{
		return false;
	}
}


?>