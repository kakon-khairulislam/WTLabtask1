
<!DOCTYPE html>
<html>
<head>
	<title>Update News</title>
    <link rel = "stylesheet" href= "../design/design.css" />	
</head>
<body>
	<nav>
    <p style = "font-size:40px; font-family:Arial;margin-bottom: 0px;margin-top:3px">Append News</p><br><br>
<div class = "nav1">
	<a class="active" href="../index.php">Home</a>
	<a href="../news/news.php">News</a>
	<a href="../feedback/feedback.php">Feedback</a>
	<a href="../view/about_us.php">About Us</a>
</div >
    </nav>	     
	 <div class="reg">
			<form name= "" action = "add_news.php"  method="POST" >
                <label>Name of category</label>
                <input type="text" name="name" id = "name"  > <br><br><hr>
		        <label>News 1</label> 
				<input type="text" name="news1" id = "news1" size="50" >
                <br><br><hr>
				 <label>News 2</label>
				<input type="text" name="news2" id = "news2" size="50">
                <br><br><hr>
				<label>News 3</label>
				<input type="text" name="news3" id = "news3" size="50" >
				<br><br><hr>
				<label>News 4</label>
				<input type="text" name="news4" id = "news4" size="50" >
				<br><br><hr>
				<label>News 5</label>
				<input type="text" name="news5" id = "news5" size="50">
				<br><hr>

                <input type="submit" name="submit" value="Submit"   ><span>
			    <input type="reset" name="reset" value="Reset">
				<?php if (isset($_GET['error'])) { ?>
			    <p class="error" style="color:red; font-size: 100%; font-weight: bold;"><?php echo $_GET['error']; ?></p><?php }?>
			
		</div>
        <div class="ui">
					<form method="POST" action="../registration/logout.php">
							<button type="submit" name="logout_btn">Log out</button>
						</form>
				  </div>
               <footer class="regf">
				All rights reserved. &copy 2022 <br>
				</footer>
				
			</form>

</body>
</html>