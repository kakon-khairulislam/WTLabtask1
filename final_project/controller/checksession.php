

<?php session_start();
	if(!isset($_SESSION['user']) && !isset($_COOKIE['username'])){
		header("Location:../registration/login.php");
	}
	

?>
