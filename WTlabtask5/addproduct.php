<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "nav.php";

     ?>
   

 <form action="createProduct.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="buyingprice">Buying Price:</label><br>
  <input type="text" id="buyingprice" name="buyingprice"><br>
  <label for="sellingprice">selling Price:</label><br>
  <input type="text" id="sellingprice" name="sellingprice"><br>
  <label for="profit">Profit:</label><br>
  <input type="text" id = "profit" name ="profit"><br>


  <input type="submit" name = "createProduct" value="Create">
  <input type="reset"> 
  <input type="radio">Display?
</form> 

</body>
</html>

