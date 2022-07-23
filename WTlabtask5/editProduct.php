<?php 

require_once 'productinfo.php';
$product = fetchProduct($_GET['id']);


 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateStudent.php" method="POST" enctype="multipart/form-data">
 <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="buyingprice">Buying Price:</label><br>
  <input type="text" id="buyingprice" name="buyingprice"><br>
  <label for="sellingprice">selling Price:</label><br>
  <input type="text" id="sellingprice" name="sellingprice"><br>
  <label for="profit">Profit:</label><br>
  <input type="text" id = "profit" name ="profit"><br>

<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "createProduct" value="Create">
  <input type="reset"> 
  <input type="radio">Display?
  <br><br>

</form> 

</body>
</html>

