<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="labtask2.css">
    <title>Document</title>
</head>
<body>
    <form action="" method = "POST">
    <div class="one">
        <H1> Enter Your Name : </H1>
        <input type="text" name ="name">
    </div>
    <div class="two">
        <H1> Enter Your Email : </H1>
        <input type="email"  name ="email">
    </div>
    <div class="three">
        <H1> Enter Your Date of Birth : </H1>
        <input type="date"  name ="dob">
       
    </div>

   <input type="submit" id = "sub" value = "submit" name = "submit">
 </form>    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $email =$dob = "";
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
  }
   
 if(empty($name)){
    
    echo "You Haven't provide your name" ;
  }else{
    if(strlen($name)<=2) {
    echo "Name should be higher than two words";
  } else{echo " welcome $name";}
    
  }
}

?>   
</body>
</html>