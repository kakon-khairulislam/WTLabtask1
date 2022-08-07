<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" href= "../design/design.css" />
</head>
<body>
<nav>
<div>
<p style = "font-size:40px; font-family:Arial;margin-bottom: 0px;margin-top:3px">News</p><br><br>

</div>
<div class = "nav1">
	<a class="active" href="../index.php">Home</a>
	<a href="../news/news.php">News</a>
	<a href="../feedback/feedback.php">Feedback</a>
	<a href="../view/about_us.php">About Us</a>
</div >
</nav>
<div class="reg">
<form action=""> 
  
  <select name="customers" onchange="showCustomer(this.value)">
    <option value="">Select a News:</option>
    <option value="Sports">Sports</option>
    <option value="Media ">Media</option>
    <option value="Domestic">Domestic</option>
    <option value="International">International</option>
  </select>
</form>
<br>
<div id="txtHint">All News will be listed here.</div>

<script>
function showCustomer(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
  xhttp.open("GET", "allnews.php?q="+str);
  xhttp.send();
}
</script>
</div>
<footer class="regf">
All rights reserved. &copy 2022 <br>
</footer>





















</body>
</html>
