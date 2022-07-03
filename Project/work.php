
<?php
session_start();
if(isset($_POST['sub'])){
    $un= $pw = "";
    $un = $_POST['un'];
    $pw = $_POST['pw'];
    
    if(empty($un)){
        header("Location: index.php? error= User Name is empty");
        exit();
    }
    if(empty($pw)){
        header("Location: index.php? error= Password is empty");
        exit();
    }
  
    
     
    if($un==$pw){
    $_SESSION['username'] = $un;
    if(isset($_SESSION['username'])){
    if(!empty($_POST['rm'])){
    $cookie_name ="User";
    $cookie_value = $un;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    if(file_exists('data.json')){
        $present_data= file_get_contents('data.json');
        $array_data = json_decode($present_data,true);
        $extra = array(
            'UserName' => $_POST['un'],
            'Password' => $_POST['pw']
        ) ;
        $array_data[]= $extra;
        $final_data = json_encode($array_data);
        if(file_put_contents('data.json',$final_data)){
            
        }}
    header("Location:wlc.php");
    exit();
} else{
    header("Location:wlc.php");
    exit();
}

    }else{
        echo "error in sessions";
    }
    }else{
    echo "Password didn't match";
    }
   }
   

?>