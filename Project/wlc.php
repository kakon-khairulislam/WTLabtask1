
<?php

session_start();
if(isset($_SESSION['username'])){
echo "Welcome ". $_SESSION['username'];


}
echo "<a href='logout.php'><br><input type='button'value='Logout'></a>";

echo "<br>Your data saved";
echo "<br><a href = 'showdata.php'><input type='button'value ='Showdata'></a>";
?>
