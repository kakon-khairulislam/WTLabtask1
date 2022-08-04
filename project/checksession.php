

<?php session_start(); 
	if(!isset($_SESSION['user']) && !isset($_COOKIE['username'])){
		header('Location: login.php');
	}
	if(!isset($_SESSION['user'])){
		$_SESSION['user'] = json_decode(base64_decode($_COOKIE['username']), true);
	}

?>
