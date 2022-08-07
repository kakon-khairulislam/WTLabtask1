<?php
include '../controller/checksession3.php';
require_once "../model/db_conn_news.php";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $news1 =  $_POST['news1'];
    $news2 = $_POST['news2'];
    $news3 = $_POST['news3'];
    $news4 = $_POST['news4'];
    $news5 = $_POST['news5'];
    
    $sql = "INSERT INTO `Allnews` (`Name`, `News1`, `News2`, `News3`, `News4`, `News5`) VALUES ('$name', '$news1', '$news2', '$news3', '$news4', '$news5')";
    $addnews = mysqli_query($conn,$sql);
    if($addnews){
     header("Location:news.php");
        }else{
        echo mysqli_query_error();
    }}

?>