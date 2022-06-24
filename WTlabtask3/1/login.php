<?php
if(isset($_POST['UN'])&& isset($_POST['PW'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $un = validate($_POST['UN']);
    $pw = validate($_POST['PW']);
    if (empty($un)){
        header("Location: index1.php?error=User Name is required");
        exit();
    }
    else if(empty($pw)){
        header("Location: index1.php?error=Password is required");
        exit();}
    else if(strlen($un)<=1) {
            header("Location: index1.php?error=Name should be higher than two words");
            exit();
        }
    else if (!preg_match("/[a-zA-Z0-9][|-|.|_]/",$un)){
        header("Location:index1.php?error=Invalid Username.");
        exit();

        }
   
    else if (strlen($pw)<=7){
        header("Location:index1.php?error=Password can't be less than 8 Words");
        exit();
        }
    else if (!preg_match_all("/[@#$%]/",$pw)){
         header("Location:index1.php?error=Invalid Password.(Must contain special character)");
        exit();           
        }
    else {
        echo "Welcome ", $un;
    }
  
            
}


    

?>

















           



