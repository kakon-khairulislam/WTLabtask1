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
<div id='show_data'></div><br>
<input type="button" onclick="previous()" value="<<Previous">
<input type="button" onclick="next()" value="Next>>">

<script>
let i = 0;
let len;
let cd;

const xhttp = new XMLHttpRequest();
xhttp.onload = function() {
  const xmlDoc = xhttp.responseXML;
  cd = xmlDoc.getElementsByTagName("Data");
  len = cd.length;
  displayCD(i);
}
xhttp.open("GET", "about_us.xml");
xhttp.send();

function displayCD(i) {
  document.getElementById("show_data").innerHTML =
  "Name : " +
  cd[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue +
  "<br>Id: " +
  cd[i].getElementsByTagName("ID")[0].childNodes[0].nodeValue +
  "<br>Home District: " + 
  cd[i].getElementsByTagName("HOMEDISTRICT")[0].childNodes[0].nodeValue+
  "<br>Contribution :" + 
  cd[i].getElementsByTagName("WORKED")[0].childNodes[0].nodeValue;
}

function next() {
  if (i < len-1) {
    i++;
    displayCD(i);
  }
}

function previous() {
  if (i > 0) {
    i--;
    displayCD(i);
  }
}
</script>

</div>
<footer class="regf">
All rights reserved. &copy 2022 <br>
</footer>

</body>
</html>



















