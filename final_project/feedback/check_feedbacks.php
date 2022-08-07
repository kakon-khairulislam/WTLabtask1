


<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" href= "../design/design.css" />
</head>
<body>
<nav>
<div>
<p style = "font-size:40px; font-family:Arial;margin-bottom: 0px;margin-top:3px">About Us</p><br><br>

</div>
<div class = "nav1">
	<a class="active" href="../index.php">Home</a>
	<a href="../news/news.php">News</a>
	<a href="../feedback/feedback.php">Feedback</a>
	<a href="../view/about_us.php">About Us</a>
</div >
</nav>
<div class="reg">
<?php
include '../controller/checksession3.php';
$data = file_get_contents("feedback.json",true);
$data = json_decode($data,true);
foreach($data as $row){
    echo $row["Message"];
}
?>


</div>
<footer class="regf">
All rights reserved. &copy 2022 <br>
</footer>

</body>
</html>


