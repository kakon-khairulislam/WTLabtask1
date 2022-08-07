<?php

session_start();

	if (isset($_POST['logout_btn'])) {
		session_destroy();
		unset($_COOKIE['user']);
		setcookie('user', null, -1);
		header('Location:login.php');
	}
	echo "You have been logged out."
?>