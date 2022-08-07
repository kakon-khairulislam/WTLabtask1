<?php include '../controller/checksession.php';
require_once "../model/db_conn.php";
$s= $_SESSION['user'];
$sql = "SELECT `Name`, `Email`, `Username`, `Password`, `Retypedpassword`, `Gender` FROM `data` WHERE `Username`= '$s'";
$selected = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($selected)){
	$name = $row['Name'];
	$email = $row['Email'];
	$username= $row['Username'];
	$password =  $row['Password'];
	$gender = $row['Gender'];
  }


?>

<!DOCTYPE html>
<html>
<head>
	<title>User_Account</title>
	 <link rel = "stylesheet" href= "../design/design.css" />
<body>

<nav>
    <div>
    <p style = "font-size:40px; font-family:Arial;margin-bottom: 0px;margin-top:3px">Your Profile</p><br><br>
    
<div style ="margin-top: 0px; position: absolute;right: 80px;top:55px;text-decoration: none;border-style: solid;border-width: 1.5px; border-color: red;">
    <a href=><b style = "color:white;font-size:25px; font-family:Arial;"><?php
					
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
						<ol><a href="change_pass.php"style= "text-decoration: none;color:black;font-size:20px; font-weight:bolder;">Change Password</a></ol><br><br>
								
					</ul>
					<div class="ui">
					<form method="POST" action="../registration/logout.php">
							<button type="submit" name="logout_btn">Log out</button>
						</form>
				  </div>
						
<div class="regvp2"> 
<tr>
								<td width="25%">Name</td>
								<td><span>:</span><?php echo $name; ?></td><br><hr><br>
							</tr> 
	       <tr>
								<td width="25%">Email</td>
								<td><span>:</span><?php echo $email; ?></td><br><hr><br>
							</tr>
                            <tr>
								<td width="25%">Username</td>
								<td><span>:</span><?php echo $username; ?></td><br><hr><br>
							</tr>
							<tr>
								<td width="25%">Password: </td>
								<td><span><?php echo $password; ?></span>

								</td><br><hr><br>
							</tr>
							<tr>
								<td width="25%">Gender :</td>
								<td><span><?php echo $gender; ?></span></td><br><hr><br>
							</tr></div>
							
							
</body>
<footer class="regf">
All rights reserved. &copy 2022 <br>
</footer>
</html>