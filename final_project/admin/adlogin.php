<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel = "stylesheet" href= "../design/design.css" />


</head>
<body >
		<nav>
    <div>
    <p style = "font-size:40px; font-family:Arial;margin-bottom: 0px;margin-top:3px">ADMIN LOGIN</p><br><br>
    
    <div class = "nav1">
	<a class="active" href="../index.php">Home</a>
	<a href="../news/news.php">News</a>
	<a href="../feedback/feedback.php">Feedback</a>
	<a href="../view/about_us.php">About Us</a>
</div >
    </nav>
	
	<div class="reg">
		<form name = "logform" onsubmit = "return validateForm();" method="post" action="adloginvalidation.php">			
			<label>Admin Name</label>
			<input type="text" name="user_name" id = "user_name" ><span style= "color:red" id = "alert2"></span>
			 
			<br><br><hr>				   				
			<label>Password</label>
			<input type="text" name="password" id = "password" ><span style= "color:red" id = "alert4"></span>
			
			<br><br><hr>
			<input type="checkbox" name="remember_me" value="remembered">Remember me <a href="forget.php">Forgot Password?</a><br><br>
			<input type="submit" name="submit" value="login">	
			<?php if (isset($_GET['error'])) { ?>
			<p class="error" style="color:red; font-size: 100%; font-weight: bold;"><?php echo $_GET['error']; ?></p><?php }?>
			
		</form>
		
	</div>
	
	<footer class="regf">
All rights reserved. &copy 2022 <br>
</footer>
<script src="../jsvalidation/adlogin.js"></script>
</body>
</html>
        