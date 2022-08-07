<?php 
include '../controller/checksession3.php';
require_once "../model/db_conn.php";

     $sql="SELECT * FROM `data` ";
     $checked = mysqli_query($conn,$sql);
     $num=mysqli_num_rows($checked);
     if($num>0){
        $row = mysqli_fetch_assoc($checked);
        echo "All User Data here:<br>";
        echo var_dump($row['Name'])."<br>";
        echo var_dump($row['Email'])."<br>";
        echo var_dump($row['Username'])."<br>";
        echo var_dump($row['Gender'])."<br>";

     }

?>