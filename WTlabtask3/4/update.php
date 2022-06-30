<?php
if(isset($_POST['sub'])){
$name = $email =$username = $password = $confirmation= "";  
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['un'];
$password = $_POST['pw'];
$confirmation = $_POST['cpw'];
$d= $_POST['date'];
$m= $_POST['month'];
$y= $_POST['year'];

if(empty($name)){
    header("Location: index.php?error= *Enter your name");
    exit();
} else{
    if(strlen($name)<=2) {
    header("Location: index.php?error= *Name should be higher than two words");
    exit();
    } else{
        if(preg_match("/^[a-zA-Z\s\._]+$/",$name)){
            if(file_exists('data.json')){
                $present_data= file_get_contents('data.json');
                $array_data = json_decode($present_data,true);
                $extra = array(
                    'name' => $_POST['name']
                ) ;
                $array_data[]= $extra;
                $final_data = json_encode($array_data);
                if(file_put_contents('data.json',$final_data)){
                    echo "Name Appended successfully";
                }}
        }else{
            echo "Wrong pattern in writing <b>Name</b>";
        }
    }
}
if(empty($email)){
    header("Location: index.php?error1= *Enter your email");
    exit();
}else{
    if (preg_match("/^[a-zA-Z\d\._]+@[a-zA-Z\d\._]+[\.][a-zA-Z\d\._]+$/",$email)) {
        if(file_exists('data.json')){
            $present_data= file_get_contents('data.json');
            $array_data = json_decode($present_data,true);
            $extra = array(
                'email' => $_POST['email']
            ) ;
            $array_data[]= $extra;
            $final_data = json_encode($array_data);
            if(file_put_contents('data.json',$final_data)){
                echo "<br/>email Appended successfully";
            }}
     }
     else {
        header("Location: index.php?error1= *Wrong pattern in writing email.");
        exit();
     }
}
if(empty($username)){
    header("Location: index.php?error2= *Enter your username");
    exit();
} else{
    if(strlen($username)<=2) {
    header("Location: index.php?error2= *Name should be higher than two words");
    exit();
    } else{
        if(preg_match("/^[a-zA-Z\s\._]+$/",$username)){
            if(file_exists('data.json')){
                $present_data= file_get_contents('data.json');
                $array_data = json_decode($present_data,true);
                $extra = array(
                    'username' => $_POST['un']
                ) ;
                $array_data[]= $extra;
                $final_data = json_encode($array_data);
                if(file_put_contents('data.json',$final_data)){
                    echo "<br/>Username Appended successfully";
                }}
        }else{
            header("Location: index.php?error2= *Wrong pattern in writing username");
            exit();
        }
    }
}
if(empty($password)){
    header("Location: index.php?error3= *Enter your password");
    exit();
}else{
    if(preg_match("/^[A-Z]+[a-zA-Z\d]+[a-zA-Z\d@$#%&(()?]+$/",$password)){

    }
    else{
        header("Location: index.php?error3= *password sample : Aaabb99$/AaabB00%");
    exit();
    }
}
if(empty($confirmation)){
    header("Location: index.php?error4= *Enter your confirm password");
    exit();
}else{
  if($password==$confirmation){
    if(file_exists('data.json')){
        $present_data= file_get_contents('data.json');
        $array_data = json_decode($present_data,true);
        $extra = array(
            'password' => $_POST['cpw']
        ) ;
        $array_data[]= $extra;
        $final_data = json_encode($array_data);
        if(file_put_contents('data.json',$final_data)){
            echo "<br/>Password Appended successfully";
        }}
  }
else{
    header("Location: index.php?error4= *Password Didn't match");
    exit();
}}


if (!empty($_REQUEST['YG'])){
    if(isset($_REQUEST['YG'])){
            if(file_exists('data.json')){
                $present_data= file_get_contents('data.json');
                $array_data = json_decode($present_data,true);
                $extra = array(
                    'Gender' => $_POST['YG']
                ) ;
                $array_data[]= $extra;
                $final_data = json_encode($array_data);
                if(file_put_contents('data.json',$final_data)){
                    echo "<br/>Gender Appended successfully";
                }
        }
    }
                } else{
                 header("Location: index.php?error5= *You Must select your Gender");
                exit();
                }



  if(empty($d)){
    header("Location: index.php?error6= *Select your birth date");
    exit();

  }else{ 
    if(empty($m)){
    header("Location: index.php?error6= *Select your birth month");
    exit();

}else{
    if(empty($y)){
    header("Location: index.php?error6= *Select your birth year");
    exit();
    }
    else{
        if($d>>0 && $d<=31){
        if($m>>0 && $m<=12){
        if($y>=1971 && $y<=2002){
            if(file_exists('data.json')){
            $present_data= file_get_contents('data.json');
            $array_data = json_decode($present_data,true);
            $extra = array(
                'Date of Birth' => $_POST['date'],
                'Month of Birth'=>$_POST['month'],
                'Year of Birth'=>$_POST['year']
            ) ;
            $array_data[]= $extra;
            $final_data = json_encode($array_data);
            if(file_put_contents('data.json',$final_data)){
                echo "<br/>Date of Birth Appended successfully";
            }
        }}else{
            header("Location: index.php?error6= *Birth year should be between 1971 to 2002");
            exit();
            }

        }else{
            header("Location: index.php?error6= *Birth month should be between 1 to 12");
            exit();
            }
        }else{
            header("Location: index.php?error6= *Birth date should be between 1 to 31");
            exit();
        }




        
    

}}}
}



?>
