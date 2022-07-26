<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    <form action="verification.php">
    Enter your name: 
   <input type="text" name ="name" id = "name"> <br><br>
   Enter your username:
   <input type="text" name ="username" id = "un"> <br><br>
   Enter your email:
   <input type="text" name ="email" id = "em"> <br><br>
   Enter your password :
   <input type="text" name ="password" id = "pw"><br><br>
   <input type="submit" name ="submit">
    </form>
   
</body>
</html>
<?php  
require_once 'model.php';


if (isset($_POST['submit'])) {
	$data['name'] = $_POST['name'];
	

  if (addProduct($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>