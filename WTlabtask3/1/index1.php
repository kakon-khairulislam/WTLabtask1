<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="c1.css" />
    <title>logIn</title>
</head>
<body>
    <b>LOGIN  </b><br><br>
 <div class = "one">
    <form action="login.php" method = "POST">
    <?php if (isset($_GET['error'])) { ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    User Name : <input type="text" name = "UN" placeholder = "Enter Username"><br><br>
    Password  : <input type="text" name = "PW" placeholder = "Password"> <hr><br>

</div>
<div>
<input type="checkbox" name = "rem">Remember Me <br><br>
</div>
<input type="Submit" name = "submit" id = "sub"> <a href="">Forget Password?</a>
</body>
    </form>

</html>
