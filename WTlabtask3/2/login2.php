<?php 

if(isset($_POST['CP'])&& isset($_POST['NP'])&& isset($_POST['RP'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $cp = validate($_POST['CP']);
    $np = validate($_POST['NP']);
    $rp = validate($_POST['RP']);
    if(empty($cp)){
        header("Location: index2.php?error= Current password Can't be empty");
        exit();
    }
    else if(empty($np)){
        header("Location: index2.php?error= New password Can't be empty");
        exit();
    }
    else if(empty($rp)){
        header("Location: index2.php?error= Retyped password Can't be empty");
        exit();
    }
    else if (preg_match("/^[abc&1234]/",$cp)){
        if($cp==$np){
        header("Location: index2.php?error=New Password can't be current password");
        exit();
        }else{
            if($np==$rp){
                echo "Password Changed ";
            }
            else{
                header("Location: index2.php?error=Retyped Password didn't match" );
            }
           
        }

    }
    else{
        header("Location:index2.php?error=Current Password didnt match");
    }




}



?>