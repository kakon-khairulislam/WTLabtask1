<?php include 'checksession.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Password Change</title>
	<link rel = "stylesheet" href= "design.css" />
</head>
<body >
	<?php 
    
    $curr_pass = $new_pass = $re_new_pass = "";
	$curr_pass_Err = $new_pass_Err = $re_new_pass_Err = $pass_mismatch_Err = $same_prev_pass_Err = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		

		$errorFlag = false;

		if (!isset($_POST['curr_pass']) || empty($_POST['curr_pass'])) {
			$curr_pass_Err = "Field can not be empty";
			$errorFlag = true;
		}
		else{
			$curr_pass = $_POST['curr_pass'];	
		}

		if (!isset($_POST['new_pass']) || empty($_POST['new_pass'])) {
			$new_pass_Err = "Field can not be empty";
			$errorFlag = true;
		}
		else{
			$new_pass = $_POST['new_pass'];
		}
	
		if (!isset($_POST['re_new_pass']) || empty($_POST['re_new_pass'])) {
			$re_new_pass_Err = "Field can not be empty";
			$errorFlag = true;
		}
		else{
			$re_new_pass = $_POST['re_new_pass'];
		}
		if($new_pass==$re_new_pass){
		if (!$errorFlag) {
			$users = json_decode(file_get_contents('users.json'),true);

			foreach ($users as $key => $value) {
				if ($value['username'] ==  $_SESSION['user']){

					$set = [
						'name' => $_SESSION['name'],
						'email' => $_SESSION['email'],
						'username' => $_SESSION['user'],
						'password' => $new_pass,
						'gender' => $_SESSION['gender']
						
					];
					$_SESSION['user'] = $set;
					if(isset($_COOKIE['user'])){
						setrawcookie('user', base64_encode(json_encode($_SESSION['user'])));
					}
					$users[$key] = $_SESSION['user'];
					file_put_contents('users.json', json_encode($users));

					header('Location: login.php');
					break;
				}
			}
		}
	}}
	?>


<form method="post" action=""<?php echo ($_SERVER['PHP_SELF']);?>>

<nav>
    <div>
    <p style = "font-size:40px; font-family:Arial;margin-bottom: 0px;margin-top:3px">Password Change</p><br><br>
    
<div style ="margin-top: 0px; position: absolute;right: 80px;top:55px;text-decoration: none;border-style: solid;border-width: 1.5px; border-color: red;">
    <a href=><b style = "color:white;font-size:25px; font-family:Arial;"><?php
					
					if(isset($_SESSION['name'])){
						echo "Welcome ".$_SESSION['user'];
						
					}
					
					?> </b></a>

</div>
    <div class = "nav1">
    <a href="index.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  
    </div >

    </nav>
					<ul class="regvp">
						<ol><a href="user_account.php "style= "text-decoration: none;color:black;font-size:20px; font-weight:bolder;">Dashboard</a></ol><br><br>
						<ol><a href="edit_profile.php"style= "text-decoration: none;color:black;font-size:20px; font-weight:bolder;">Edit Profile</a></ol><br><br>
						<ol><a href="view_profile.php"style= "text-decoration: none;color:black;font-size:20px; font-weight:bolder;">View Profile</a></ol><br><br>
								
					</ul>
					
					<div class ="regvp2"><form action="" method="POST">
					<p style= "background-color:rgba(36, 1, 91, 0.985);; color: white;font-weight:bold">You have to log in again after Successfully changing password</p><br>
								<tr>
									<td>Current Password</td>
									<td>:</td>
									<td><input type="text" name="curr_pass" value="<?php echo $curr_pass; ?>"></td>
									<td><span class="red"><?php echo $curr_pass_Err; ?></span></td>
									<td></td><br><br><hr>
								</tr>

								<tr>
									<td>New Password</td>
									<td>:</td>
									<td><input type="text" name="new_pass" value="<?php echo $new_pass; ?>"></td>
									<td><span class="red"><?php echo $new_pass_Err; ?></span></td>
									<td><?php echo $same_prev_pass_Err; ?></td><br><br><hr>

								</tr>

								<tr>
									<td>Confirm Password</td>
									<td>:</td>
									<td><input type="text" name="re_new_pass" value="<?php echo $re_new_pass; ?>"></td>
									<td><span class="red"><?php echo $re_new_pass_Err; ?></span></td>
									<td><span class="red"><?php echo $pass_mismatch_Err; ?></span></td><br><br>
								</tr>
								
					
							<br>
						
							<input type="submit" name="submit">
						
					</form></div>	
</body>
<footer class="regf">
All rights reserved. &copy 2022 <br>
</footer>
</html>
