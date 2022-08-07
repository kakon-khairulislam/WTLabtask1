<?php
 include '../controller/checksession.php';
require_once "../model/db_conn.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name = $_POST['fname'];
$email =  $_POST['email'];
$username= $_POST['user_name'];
$password= $_POST['password'];
$con_pass= $_POST['con_pass'];
$gender= $_POST['gender'];
}
$sql="SELECT * FROM `data` WHERE `Username`='$username'";
    $searchresult = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($searchresult);
    if($count>0){
        header("Location: ../registration/registration.php?error=*Sorry! User does exist");
    }else{
        $sql = "INSERT INTO `data` (`Name`, `Email`, `Username`, `Password`, `Retypedpassword`, `Gender`) VALUES ('$name', '$email', '$username', '$password', '$con_pass', '$gender')";
        $added = mysqli_query($conn,$sql);
        if($added){
        header("Location:../registration/login.php");
    }}


?>