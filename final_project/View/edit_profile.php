<?php include '../controller/checksession.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit_Account</title>
    <link rel = "stylesheet" href= "../design/design.css" />	
</head>
<body >
<nav>
    <div>
    <p style = "font-size:40px; font-family:Arial;margin-bottom: 0px;margin-top:3px">
    
    
    Edit Profile</p><br><br>
    
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
                    <ol><a href="view_profile.php"style= "text-decoration: none;color:black;font-size:20px; font-weight:bolder;">View Profile</a></ol><br><br>
                    <ol><a href="change_pass.php"style= "text-decoration: none;color:black;font-size:20px; font-weight:bolder;">Change Password</a></ol><br><br>
                            
					</ul>
		<div class="ui">
					<form method="POST" action="../registration/logout.php">
							<button type="submit" name="logout_btn">Log out</button>
						</form>
		</div>

            <div class ="regvp2">
            <form name= "regform" onsubmit ="return validateForm();" action = "../model/edit_user.php"  method="POST" >
            <p style= "background-color:red; color: white;font-weight:bold">You have to log in again after making any changes</p><br>    
            <label>Name</label> 
				<input type="text" name="fname" id = "fname" ><span style= "color:red" id = "alert"></span>
                <br><br><hr>
				 <label>E-mail</label>
				<input type="text" name="email" id = "email"><span style= "color:red" id = "alert1"></span>
                <br><br><hr>
				<label>User Name</label>
				<input type="text" name="user_name" id = "user_name" ><span style= "color:red" id = "alert2"></span>
				<br><br><hr>
				
                <input type="submit" name="submit" value="Change"   >
			    <input type="reset" name="reset" value="Reset">
				<?php if (isset($_GET['error'])) { ?>
			    <p class="error" style="color:red; font-size: 100%; font-weight: bold;"><?php echo $_GET['error']; ?></p><?php }?>
			

        
            </div>




		


            <script src="../jsvalidation/registration.js"></script>		
		
</body>
<footer class="regf">
All rights reserved. &copy 2022 <br>
</footer>
</form>
</html>