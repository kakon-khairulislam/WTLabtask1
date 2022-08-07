<?php 
include '../controller/checksession.php';
require_once "../model/db_conn.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $password = $_POST['password'];
    $con_pass =  $_POST['con_pass'];
    $cons_passs =  $_POST['cons_passs'];
    $s = $_SESSION['user'];
    if (!isset($_POST['password']) || empty($_POST['password'])) {
        header("Location:../view/change_pass.php?error=Recent Password can't be empty");
    }else if(!isset($_POST['con_pass']) || empty($_POST['con_pass'])){
header("Location:../view/change_pass.php?error=New Password can't be empty");
    }else if(!isset($_POST['cons_passs']) || empty($_POST['cons_passs'])){
        header("Location:../view/change_pass.php?error=Confirm Password can't be empty");
    }elseif($con_pass!=$cons_passs){
        header("Location:../view/change_pass.php?error=Password didn't match");
    }
else{
     $sql="UPDATE `data` SET `Password`='$con_pass',`Retypedpassword`='$cons_passs' WHERE `Username`='$s'";
     $changed = mysqli_query($conn,$sql);
    if($changed){
        header("Location:../registration/login.php");
    }else{
    header("Location:../view/change_pass.php?error= error in changing password");
}}
   
}


?>