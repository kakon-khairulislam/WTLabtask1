<?php 
include '../controller/checksession.php';
require_once "../model/db_conn.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['fname'];
    $email =  $_POST['email'];
    $username= $_POST['user_name'];
    $s = $_SESSION['user'];
}   
$sql="UPDATE `data` SET `Name`='$name',`Email`='$email',`Username`='$username' WHERE `Username`='$s'";
$edited = mysqli_query($conn,$sql);
if($edited){
    header("Location:../registration/login.php");
}else{
    echo "error";
}
?>