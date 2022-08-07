<?php
include '../controller/checksession3.php';
require_once "../model/db_conn_admin.php";


session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['user_name'];
    $password = $_POST['password'];
}
$sql="SELECT * FROM `data` WHERE `Adminname`='$username'and `Password`='$password'";
$searchresult = mysqli_query($conn,$sql);
$count = mysqli_num_rows($searchresult);
if($count>0){
    $_SESSION['user'] = $username;
    if(isset($_POST['remember_me']) && $_POST['remember_me'] == 'remembered'){
        setcookie("user", $username,time()+3600,'/');
    }
    header("Location:adminhome.php");

}else{
    header("Location: adlogin.php?error=*Invalid adminname/Password"); 
}

?>