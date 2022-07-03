<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1><b>You Have Been Logged OUt</b></h1>
    <form action="work.php" method ="POST">

    <div style= "margin-left:200px; margin-top:30px ;margin-right:500px">
        <p>Username</p>
        <input type="text" name = "un">
        <p>Password</p>
        <input type="text"name = "pw"><hr>
        <input type="radio" name="rm" > Remember me <br><br>
        <input type="submit" name= "sub">
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

    </div>
    </form>
</body>
</html>