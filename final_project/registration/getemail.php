<?php
require_once "../model/db_conn.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(!isset($_POST['forgetemail']) || empty($_POST['forgetemail'])){
    header("Location:forget.php?error= Enter a valid Email Address ");
  }
  
  else{
   
   $fgemail = $_POST['forgetemail'];
   $sql="SELECT * FROM `data` WHERE `Email`='$fgemail'";
   $result = mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($result)){
    $password = $row['Password'];
    echo "Your password Is : ".$password;
    echo "<a href='../index.php'> <br>Continue?</a>";
   }
  
   }
      }

?>