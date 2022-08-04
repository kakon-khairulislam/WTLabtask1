
<!DOCTYPE html>
<html>
<head>
	<title>Forget password</title>
	<link rel = "stylesheet" href= "design.css" />
</head>
<body >
<?php
 $email="";
 $emailErr ="";
 $matchError="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
  session_start();
$matchError = false;
  $errorFlag = false;

  if(!isset($_POST['forgetemail']) || empty($_POST['forgetemail'])){
    $emailErr = "Email is required";
    $errorFlag = true;
  }
  
  if(!$errorFlag){
    $users = json_decode(file_get_contents('users.json'), true);

    if(is_array($users)){
      
      foreach ($users as $key => $value) {
        if($value['email'] == $_POST['forgetemail']){
          $_SESSION['user'] = $value['username'];  
          $_SESSION['email'] = $value['email'];
						$_SESSION['gender'] = $value['gender'];
						$_SESSION['name'] = $value['name'];
						$_SESSION['password'] = $value['password'];

            header("Location: rewritepass.php");
          }else{
          $matchError = "User not found";
            break;
          }
        }}}
      }

?>
<nav>
    <div>
    <p style = "font-size:40px; font-family:Arial;margin-bottom: 0px;margin-top:3px">Forget Password</p><br><br>
    

    <div class = "nav1">
    <a class="active" href="index.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  
    </div >

    </nav>
					<div style = "color:black; position: absolute;margin-top: 250px; margin-left: 350px;margin-right: 250px;">
          <form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
            <p>Enter your email address</p>
            <input type="text" name="forgetemail" value="<?php echo $email;?>">
            <input type="submit" name = "submit"></form>           
            <span style="color:red"><?php echo $emailErr;?></span><span style="color:red"><?php echo  $matchError;?></span>
            
          </div>
				
					 
					<footer class="regf">
All rights reserved. &copy 2022 <br>
</footer>	
</body>
</html>
