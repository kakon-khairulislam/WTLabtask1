<?php include '../controller/checksession.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Password Change</title>
	<link rel = "stylesheet" href= "../design/design.css" />
</head>
<body >


<nav>
    <div>
    <p style = "font-size:40px; font-family:Arial;margin-bottom: 0px;margin-top:3px">Password Change</p><br><br>
    
<div style ="margin-top: 0px; position: absolute;right: 80px;top:55px;text-decoration: none;border-style: solid;border-width: 1.5px; border-color: red;">
<a href=><b style = "color:white;font-size:25px; font-family:Arial;">
			<?php
			if(isset($_SESSION['user'])){
			echo "Welcome ".$_SESSION['user'];
			}

?> </b></a>

</div>
<div class = "nav1">
	<a class="active" href="../index.php">Home</a>
	<a href="../news/news.php">News</a>
	<a href="../feedback/feedback.php">Feedback</a>
	<a href="../view/about_us.php">About Us</a>
</div >

</nav>
	<ul class="regvp">
				<ol><a href="user_account.php "style= "text-decoration: none;color:black;font-size:20px; font-weight:bolder;">Dashboard</a></ol><br><br>
				<ol><a href="edit_profile.php"style= "text-decoration: none;color:black;font-size:20px; font-weight:bolder;">Edit Profile</a></ol><br><br>
				<ol><a href="view_profile.php"style= "text-decoration: none;color:black;font-size:20px; font-weight:bolder;">View Profile</a></ol><br><br>
	</ul>
<div class ="regvp2">
	
            <form action = "../model/pass_change.php"  method="POST" >
                <p style= "background-color:red; color: white;font-weight:bold">You have to log in again after making any changes</p><br>    
                <label>Recent Password</label> 
				<input type="text" name="password" id ="password" >	<span style= "color:red" id = "alert4"></span>

                <br><br><hr>
				 <label>New Password</label>
				<input type="text" name="con_pass" id ="con_pass"><span style= "color:red" id = "alert2"></span>
				
                <br><br><hr>
				<label>Confirm Password</label>
				<input type="text" name="cons_passs" id ="cons_passs" ><span style= "color:red" id = "alert3"></span>
			
				<br><br><hr>
				
                <input type="submit" name="submit" value="submit" >
			    <input type="reset" name="reset" value="Reset">
				<?php if (isset($_GET['error'])) { ?>
			    <p class="error" style="color:red; font-size: 100%; font-weight: bold;"><?php echo $_GET['error']; ?></p><?php }?>
         	</form>
			 
		</div>
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