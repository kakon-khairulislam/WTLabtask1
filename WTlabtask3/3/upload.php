<?php 
if(isset($_POST['submit'])){
    $file = $_FILES['pic']['name'];
    if(empty($file)){
        echo "No File chosen";
    }else{
        echo "okay";
    }


}




?>