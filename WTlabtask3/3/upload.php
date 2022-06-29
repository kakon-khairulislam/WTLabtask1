<?php 
if(isset($_POST['submit'])){
    $file_n = $_FILES['file']['name'];
    $size = strlen($file_n);
    $expos = strrpos($file_n,".");
    $ext = substr($file_n,$expos+1,$size);
    $e= array('jpeg','jpg','png',);
    if(empty($file_n)){
        header("Location: index.php?error= NO file chosen");
        exit();
    }else{
      if(in_array($ext,$e) ){
        if($_FILES['file']['size']>0 && $_FILES['file']['size']<4091300 ){
              $ta = $_FILES['file']['tmp_name'];
              $fa = 'Uploaded files/'.uniqid().$file_n;
              move_uploaded_file($ta,$fa);
              echo '<img src="'.$fa.'"width="300" height="200">';
        }else{
          header("Location: index.php?error= File size can't be more than 4MB ");
          exit();
        }
      }else{
        header("Location: index.php?error= File type can only be jpeg/jpg/png");
        exit();
      }
      
    }
    
    }


?>
