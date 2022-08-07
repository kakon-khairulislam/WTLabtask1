<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
    <link rel = "stylesheet" href= "../design/design.css" />	
</head>
<body>
	<nav>
    <div>
    <p style = "font-size:40px; font-family:Arial;margin-bottom: 0px;margin-top:3px">Registration</p><br><br>  
<div style ="margin-top: 0px; position: absolute;right: 80px;top:55px;text-decoration: none;border-style: solid;border-width: 1.5px; border-color: red;">
    <a href="../registration/login.php"><b style = "color:white;font-size:25px; font-family:Arial;"> Login here</b></a>
</div>
<div class = "nav1">
	<a class="active" href="../index.php">Home</a>
	<a href="../news/news.php">News</a>
	<a href="../feedback/feedback.php">Feedback</a>
	<a href="../view/about_us.php">About Us</a>
</div >
    </nav>	     
	 <div class="reg">
			<form name= "regform" onsubmit ="return validateForm();" action = "../model/add_users.php"  method="POST" >
		        <label>Name</label> 
				<input type="text" name="fname" id = "fname" ><span style= "color:red" id = "alert"></span>
                 <br><hr>
				 <label>E-mail</label>
				<input type="text" name="email" id = "email"><span style= "color:red" id = "alert1"></span>
                <br><br><hr>
				<label>User Name</label>
				<input type="text" name="user_name" id = "user_name" ><span style= "color:red" id = "alert2"></span>
				<br><br><hr>
				<label>Password</label>
				<input type="text" name="password" id = "password" ><span style= "color:red" id = "alert4"></span>
				<br><br><hr>
				<label>Confirm Password</label>
				<input type="text" name="con_pass" id = "con_pass"><span style= "color:red" id = "alert5"></span> 
				<br><br><hr>

				<label>Gender </label>
				<input type="radio" name="gender" value="male" id="male">Male
				<input type="radio" name="gender" value="female" id="female">Female
				<input type="radio" name="gender" value="others" id="others">Others
				<br><span style= "color:red" id = "alert6"></span><br><br>
				
				
                <input type="submit" name="submit" value="Sign Up">
			    <input type="reset" name="reset" value="Reset">
				<?php if (isset($_GET['error'])) { ?>
			    <p class="error" style="color:red; font-size: 100%; font-weight: bold;"><?php echo $_GET['error']; ?></p><?php }?>
			
		</div>
               <footer class="regf">
				All rights reserved. &copy 2022 <br>
				</footer>
				
			</form>
<script src="../jsvalidation/registration.js"></script>

</body>
</html>