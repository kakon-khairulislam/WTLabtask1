<?php 
session_start();
    $name = $email = " ";
    $nameErr = $emailErr = " " ;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    
    $errorFlag = false;


    
    if(!isset($_POST['fname']) || empty($_POST['fname'])){
        $nameErr = "Name is required";
        $errorFlag = true;
    }else{
        $name = $_POST['fname'];
        if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
            $nameErr = "Only letters, whitespaces, - and ' are acceptable";
            $errorFlag = true;
        }
        else if(str_word_count($name)<2){
            $nameErr = "Name has to contain at least two words ";
            $errorFlag = true;
        }
    }

    if(empty($_POST['email'])){
        $emailErr = "Email is required";
        $errorFlag = true;
    }else{
        $email = $_POST['email'];
        $email_pattern = "/@gmail.com/i";
        $email_matching_result = preg_match($email_pattern, $email);
        if($email_matching_result == 0){
            $emailErr = "Email format is not valid";
            $errorFlag = true;
        }
    }
    
 

    if(!$errorFlag){
        $users = json_decode(file_get_contents('users.json'), true);
        
        foreach ($users as $key => $value) {
            if ($value['name'] == $_SESSION['name']) {
                $set = [
                    'name' => $_SESSION['name'],
                    'email' => $_POST['email'],
                    'username'=> $_POST['fname'],
                    'password'=> $_SESSION['password'],
                    'gender' => $_SESSION['gender']
                    
                ];
                $_SESSION['name'] = $set;
                 $users[$key] = $_SESSION['name'];
                file_put_contents('users.json', json_encode($users));
                header("Location: login.php");
                exit();
                if(isset($_COOKIE['user'])){
                    setrawcookie('user', base64_encode(json_encode($_SESSION['user'])));
                }
               
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit_Account</title>
    <link rel = "stylesheet" href= "design.css" />
</head>
<body >
<nav>
    <div>
    <p style = "font-size:40px; font-family:Arial;margin-bottom: 0px;margin-top:3px">
    
    
    Edit Profile</p><br><br>
    
<div style ="margin-top: 0px; position: absolute;right: 80px;top:55px;text-decoration: none;border-style: solid;border-width: 1.5px; border-color: red;">
    <a href=><b style = "color:white;font-size:25px; font-family:Arial;">
    <?php
					
					if(isset($_SESSION['name'])){
						echo "Welcome ".$_SESSION['user'];
						
					}
					
					?> </b></a>

</div>
    <div class = "nav1">
    <a  href="index.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  
    </div >

    </nav>
					<ul class="regvp">
						<ol><a href="user_account.php "style= "text-decoration: none;color:black;font-size:20px; font-weight:bolder;">Dashboard</a></ol><br><br>
						<ol><a href="view_profile.php"style= "text-decoration: none;color:black;font-size:20px; font-weight:bolder;">View Profile</a></ol><br><br>
						<ol><a href="change_pass.php"style= "text-decoration: none;color:black;font-size:20px; font-weight:bolder;">Change Password</a></ol><br><br>
								
					</ul>
					<div class="ui">
					<form method="POST" action="logout.php">
							<button type="submit" name="logout_btn">Log out</button>
						</form>
				  </div>
					<div class ="regvp2">
                        <form method="post" action="">
                        <p style= "background-color:rgba(36, 1, 91, 0.985);; color: white;font-weight:bold">You have to log in again after making any changes</p><br>
					            UserName
								<input type="text" name="fname" value="<?php $_SESSION['user']?>"><span style="color: red;"><?php echo $nameErr ?></span>
								<hr>
								Email
								<input type="text" name="email" value="<?php $_SESSION['email']?>"><span style="color: red;"><?php echo $emailErr ?></span>
								<hr>
                                
							
								<input type="submit" name="submit" value="Submit">

                
                    </div>

 


		


			
		
</body>
<footer class="regf">
All rights reserved. &copy 2022 <br>
</footer>
</html>