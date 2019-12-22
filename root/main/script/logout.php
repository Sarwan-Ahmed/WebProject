<?php
	session_start();
	session_destroy();
	header('Location: http://localhost/root/main/unsplash-main.php');
	exit();
?>