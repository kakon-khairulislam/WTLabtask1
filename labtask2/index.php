<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="l2.css" />
    <title>Document</title>
  </head>
  <body>
    <p><b>Form Validation</b></p>
    <form action="" method="POST">
      <div class="one">
        <h1>Enter Your Name :</h1>
        <input type="text" name="name" />
      </div>
      <div class="two">
        <h1>Enter Your Email :</h1>
        <input type="text" name="email" />
      </div>
      <div class="three">
        <h1>Enter Your Date of Birth :</h1>
        <input type="date" name="dob" />
      </div>
      <div class="four">
        <h1>Your Gender :</h1>
        <input type="radio" id="M" name="YG" value="Male">
        <label for="M">Male</label>
        <input type="radio" id="F" name="YG" value="Female">
        <label for="F">Female</label>
        <input type="radio" id="O" name="YG" value="Other">
        <label for="O">Other</label>
      </div>
      <div class="five">
        <h1>Degree :</h1>
        <input type="checkbox" name="degree[]"  Value ="SSC" /> SSC
        <input type="checkbox" name="degree[]" Value ="HSC" /> HSC
        <input type="checkbox" name="degree[]" Value ="MSc" /> MSc
        <input type="checkbox" name="degree[]"  Value ="BSc"/> BSc
      </div>
      <div class="six">
        <h1>Your Blood Group :</h1>
        <input type="text" name="blood" list="bg" placeholder="Select an option "/>
        <datalist id = "bg" >
          <option value = "A+">
          <option value = "A-">
          <option value = "B+">
          <option value = "B-">
          <option value = "O+">
          <option value = "O-">
          <option value = "AB+">
          <option value = "AB- ">
       </datalist>
      </div>

      <div id="sub"><input type="submit"  value="submit" name="submit" /></div>
    </form>

    
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $email =$dob = $YG = $blood= "";
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $_blood = $_POST['blood'];

  }
   
 if(empty($name)){   
    echo "You haven't provide your <b>Name</b>" ;
  }else{
    if(strlen($name)<=2) {
    echo "Name should be higher than two words";
  } else{
    if(preg_match("/[^0-9a-zA-Z]/",$name)){
      echo " welcome $name";
    } else{
      echo "Wrong pattern in writing <b>Name</b>";
    }}}

    if(empty($email)){
      echo "</br>You haven't provide your <b>Email</b>";
    }
    else {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "</br>Wrong pattern in writing <b> Email</b>";
      }
      else {
        echo "<br>Your Email is : $email";
      }
    }
    if(empty($dob)){
      echo "</br>You haven't Provide <b>Date of Birth</b>";
    }else{
      echo "<br/>Your Birthday $dob";
    }
    }
    
 
  if(isset($_REQUEST['YG'])){
    echo " <br/>Your Gender is :",$_REQUEST['YG'];
  }else{
    if (!empty($_REQUEST['YG'])){
      
    }
    else{
      echo "<br/>You haven't Provide Your <b>Gender</b>";
    }
    
  }
  
  $checking = 0;
  if(!empty($_POST['degree'])){
    $checking = count($_POST['degree']);
    if($checking <=1){
      echo "<br/>Please Provide at least two <b>Degree</b>";
    }
    else{
      echo "<br/>your provided degrees are : ";
      foreach($_POST["degree"] as $degree){
        echo $degree," ";
      }
    }
  }else{
    echo "<br/>You haven't Provide Your <b>Degree</b>";
  }




  if (empty($_REQUEST['blood'])){echo "<br/>You haven't Provide Your <b>Blood Group</b>";}
  else{
  if(isset($_REQUEST['blood'])){
    echo "<br/>Your Blood Group is :" ,$_REQUEST['blood'];
  }
}
 

?>
  </body>
  <footer>
    <hr>
  </footer>
</html>
