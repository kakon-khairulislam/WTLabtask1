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
        <input type="checkbox" name="deg1" id= "dr1" Value ="ssc" /> SSC
        <input type="checkbox" name="deg2" id= "dr2"Value ="hsc" /> HSC
        <input type="checkbox" name="deg3" id= "dr3"Value ="Msc" /> MSc
        <input type="checkbox" name="deg4" id= "dr4" Value ="Bsc"/> BSc
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
$name = $email =$dob = $YG =$deg= $blood= "";
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
    echo "<br/>You haven't Provide Your <b>Gender</b>";
  }


  if(empty ($_POST['checkbox'])){
    echo "<br/>You haven't Provide Your <b>Degree</b>";
  }else{
    if (strlen($_POST['checkbox'])<2){
      echo "Please choose Two Degree at least ";
    }
    else{
       
    }
  }
 if(isset($_REQUEST['deg1'])){
    echo " <br/>Your Degree/Degrees :",$_REQUEST['deg1'];
  } if(isset($_REQUEST['deg2'])){
    echo " <br/>Your Degree/Degrees :",$_REQUEST['deg2'];
  } if(isset($_REQUEST['deg3'])){
    echo " <br/>Your Degree/Degrees :",$_REQUEST['deg3'];
  } if(isset($_REQUEST['deg4'])){
    echo " <br/>Your Degree/Degrees :",$_REQUEST['deg4'];
  }


  if (empty($_REQUEST['blood'])){echo "<br/>You haven't Provide Your <b>Blood Group</b>";}
  else{
  if(isset($_REQUEST['blood'])){
    echo "<br/>Your Blood Group is :" ,$_REQUEST['blood'];
  }}
 

?>
  </body>
  <footer>
    <hr>
  </footer>
</html>
