<?php include '../controller/checksession.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<link rel = "stylesheet" href= "../design/design.css" />
</head>
<body >


<nav>
    <div>
    <p style = "font-size:40px; font-family:Arial;margin-bottom: 0px;margin-top:3px">Feedback</p><br><br>
    
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

<div class ="regvp2">
	
            <form action = "feedbackhandle.php"  method="POST" >
                <label>Write Your Feedback here :</label> <br>
				<input type="text" name="feedback" size="65">	
			
				<br><br><hr>
				
                <input type="submit" name="submit" value="submit" >
			    <input type="reset" name="reset" value="Reset">
				<?php if (isset($_GET['error'])) { ?>
			    <p class="error" style="color:red; font-size: 100%; font-weight: bold;"><?php echo $_GET['error']; ?></p><?php }?>
            
         	</form>
			 
		</div>
		<div style ="position: relative;top:480px;margin-left: 100px">
		<form method="POST" action="../view/user_account.php">
		<button type="submit" style="background-color: #008CBA;border: none;color: white; padding: 15px 32px; text-align: center; text-decoration: none; display: inline-block;
  font-size: 16px;"  name="logout_btn">Dashboard</button>
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