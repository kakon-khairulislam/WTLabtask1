
<!DOCTYPE html>
<html>
<head>
	<title>Forget password</title>
	<link rel = "stylesheet" href= "../design/design.css"" />
</head>
<body >
<nav>
    <div>
    <p style = "font-size:40px; font-family:Arial;margin-bottom: 0px;margin-top:3px">Forget Password</p><br><br>
    

    <div class = "nav1">
	<a class="active" href="../index.php">Home</a>
	<a href="../news/news.php">News</a>
	<a href="../feedback/feedback.php">Feedback</a>
	<a href="../view/about_us.php">About Us</a>
</div >

    </nav>
					<div style = "color:black; position: absolute;margin-top: 250px; margin-left: 350px;margin-right: 250px;">
          <form method="post" action="getemail.php">
            <p>Enter your email address</p>
            <input type="text" name="forgetemail" >
            <input type="submit" name = "submit"></form>           
            <?php if (isset($_GET['error'])) { ?>
			    <p class="error" style="color:red; font-size: 100%; font-weight: bold;"><?php echo $_GET['error']; ?></p><?php }?>
            
          </div>
				
					 
					<footer class="regf">
All rights reserved. &copy 2022 <br>
</footer>	
</body>
</html>
