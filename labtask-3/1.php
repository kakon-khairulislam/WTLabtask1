<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="l3.css">
    <title>Document</title>
</head>
<body>
    <b><h1 id ="h">Log In</h1></b>
    <form action="" method = "POST">
    <div class="one">
        <H1> User Name : </H1>
        <input type="text" name ="name">
        <H1> password : </H1>
        <input type="pass" name ="pass"> <br><br> 
        <input type="radio" name="remme" value = "remme" >
        <label for="remme">Remember Me</label>
    </div>
    <span></span>
   <input type="submit" id = "sub" value = "submit" name = "submit"> <a href="" id = "sub2">Forget Password?</a>
 </form>    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $pass="";
  if(isset($_POST['submit'])){
    $uname = $_POST['name'];
    $pass = $_POST['pass'];
   
}
   
  if(empty($uname)){ 
    echo "You Haven't provide username <br>"  ;
  }
  else{
    if(strlen($uname)<2) {
    echo "Name should be higher than two words<br>";
  } else{echo "";}
    
  }
  if(empty($pass)){
    
    echo "You Haven't provide password" ;
  }else{
    if(strlen($pass)<8){
        echo "Password should be more than 8 characters";
    }else{
        echo " welcome $uname <br>";
    }
  }
 
}

?>   
</body>
</html>