<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="c2.css" />
    <title> Change Password</title>
</head>
<body>
    <b>Change Password</b> <br><br>
   
        <form action="login2.php"method= "POST">
    <?php if (isset($_GET['error'])) { ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
        Current Password : <input type="pass" name="CP" id="1"> <br> <br>
        New Password : <input type="pass" name="NP" id="2"><br><br>
        Retype Password : <input type="pass" name="RP" id="3"><br> <hr>
     <input type="submit"name = "submit">
    </form>

   
</body>
</html>
