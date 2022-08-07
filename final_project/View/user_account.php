<?php include '../controller/checksession.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>User_Account</title>
	<link rel = "stylesheet" href= "../design/design.css" /> 
</head>
<body >
<nav>
<div>
    <p style = "font-size:40px; font-family:Arial;margin-bottom: 0px;margin-top:3px">Dashboard</p><br><br>
<div style ="margin-top: 0px; position: absolute;right: 80px;top:55px;text-decoration: none;border-style: solid;border-width: 1.5px; border-color: red;">
    <a href=><b style = "color:white;font-size:25px; font-family:Arial;">
<?php
if(isset($_SESSION['user'])){
	echo "Welcome ".$_SESSION['user'];		
}?> </b></a>
</div>
<div class = "nav1">
	<a class="active" href="../index.php">Home</a>
	<a href="../news/news.php">News</a>
	<a href="../feedback/feedback.php">Feedback</a>
	<a href="../view/about_us.php">About Us</a>
</div >
</nav>
	<ul class="reg" >
		<ol><a href="view_profile.php" style= "text-decoration: none;font-size:20px; font-weight:bolder;">View Profile</a></ol>
		<br><br>
		<ol><a href="edit_profile.php" style= "text-decoration: none;font-size:20px; font-weight:bolder;">Edit Profile</a></ol>
		<br><br>
		<ol><a href="change_pass.php" style= "text-decoration: none;font-size:20px; font-weight:bolder;">Change Password</a></ol><br>
	</ul>
<div class="ui">
	<form method="POST" action="../registration/logout.php">
			<button type="submit" name="logout_btn">Log out</button>
	</form>
</div>
<footer class="regf">				
All rights reserved. &copy 2022 <br>
</footer>	
</body>
</html>					 
				
