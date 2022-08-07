<?php include '../controller/checksession3.php';
require_once "../model/db_conn.php";

$q = $_REQUEST["q"];

$hint = "";
$sql="SELECT * FROM `data` WHERE `Username` LIKE '{$q}%'";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
  $name = $row['Name'];
  $email = $row['Email'];
  echo "<br> Name: ".$name." "."Email:".$email." Available"."<br>";
}


?>