<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel = "stylesheet" href= "design.css" />


</head>
<body >
    
			<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
			
<?php
		$userName = $pass = "";
		$userName_Err = $pass_Err = "";
		$matchError = false;
		$errorFlag = false;
		session_start();

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
				
			if (!isset($_POST['user_name']) || empty($_POST['user_name'])) {
				$userName_Err = "User Name is required";
				$errorFlag = true; 
			}else{
				$userName = $_POST['user_name'];
			}
				
			if (!isset($_POST['password']) || empty($_POST['password'])) {
				$pass_Err = "Password is required";
				$errorFlag = true;
			}else{
				$pass = $_POST['password'];
			}

			if(!$errorFlag){
				$users = json_decode(file_get_contents('users.json'), true);

				if(is_array($users)){
					$matchError = "User not found";
					foreach ($users as $key => $value) {
						if($value['username'] == $_POST['user_name']){
							if ($_POST['password'] == $value['password']){
								$_SESSION['user'] = $value['username'];
								

								if(isset($_POST['remember_me']) && $_POST['remember_me'] == 'remembered'){
									setrawcookie('user', base64_encode(json_encode($value['user'])));
								}
								header("Location: User_account.php");
							}else{
								$matchError = "Password does not match";
								break;
							}
						}
						$_SESSION['email'] = $value['email'];
						$_SESSION['gender'] = $value['gender'];
						$_SESSION['name'] = $value['name'];
						$_SESSION['password'] = $value['password'];
						
						
						

					}
			

				}else{
					$matchError = "No users found";

				}
			}
			

		}

?>
	<nav>
    <div>
    <p style = "font-size:40px; font-family:Arial;margin-bottom: 0px;margin-top:3px">LOG IN</p><br><br>
    
<div style ="margin-top: 0px; position: absolute;right: 80px;top:55px;text-decoration: none;border-style: solid;border-width: 1.5px; border-color: red;">
    <a href="registration.php"><b style = "color:white;font-size:25px; font-family:Arial;"> SIGN UP here</b></a>

</div>
    <div class = "nav1">
    <a class="active" href="index.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  
    </div >

    </nav>
<div class="reg">
		<form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
				<?php
				if($matchError){
					?>
					<span style="color: red;"><?php echo $matchError?></span>	
					<?php
				}
				?>
				
					
					<label>User Name: </label>
					<input type="text" name="user_name" value="<?php echo $userName;?>">
					<span class="red"><?php echo $userName_Err?></span> <br><hr>
				

					
						<label>Password: </label>
						<input type="password" name="password" value="<?php echo $pass;?>">
						<span class="red"><?php echo $pass_Err?></span><br><hr>
					
				<input type="checkbox" name="remember_me" value="remembered">Remember me<br><br>
				<input type="submit" name="submission" value="submit">	
		</form>

	</div>
	<footer class="regf">
All rights reserved. &copy 2022 <br>
</footer>
</body>
</html>