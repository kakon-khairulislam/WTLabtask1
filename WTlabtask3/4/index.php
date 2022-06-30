<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href= "c4.css" />
    <title>Document</title>
</head>
<body>
    <p><b>Registration</b></p>
    <form action="update.php" method = "POST">
         Name              :
        <input type="text" name="name" id = "reg" />
        <?php if (isset($_GET['error'])) { ?>
        <p class="error" style="color:red"><?php echo $_GET['error']; 
        ?></p>
        <?php } 
        ?> <br>
        <hr>
         Email             :
        <input type="email" name="email" id = "reg" />
        <?php if (isset($_GET['error1'])) { ?>
        <p class="error" style="color:red"><?php echo $_GET['error1']; 
        ?></p>
        <?php } 
        ?><br><hr>
        User Name         :
        <input type="text" name="un" id = "reg" />
       
        <?php if (isset($_GET['error2'])) { ?>
        <p class="error" style="color:red"><?php echo $_GET['error2']; 
        ?></p>
        <?php } 
        ?><br><hr>
         Password          :
        <input type="text" name="pw" id = "reg" />
        <?php if (isset($_GET['error3'])) { ?>
        <p class="error" style="color:red"><?php echo $_GET['error3']; 
        ?></p>
        <?php } 
        ?><br>
        <hr>
         Confirm password  :
        <input type="text" name="cpw" id = "reg" />
        <?php if (isset($_GET['error4'])) { ?>
        <p class="error" style="color:red"><?php echo $_GET['error4']; 
        ?></p>
        <?php } 
        ?><br><hr><br>
       <div class="gen">
        Your Gender :
        <input type="radio" id="M" name="YG" value="Male">
        <label for="M">Male</label>
        <input type="radio" id="F" name="YG" value="Female">
        <label for="F">Female</label>
        <input type="radio" id="O" name="YG" value="Other">
        <label for="O">Other</label> <br><br>
        <?php if (isset($_GET['error5'])) { ?>
        <p class="error" style="color:red"><?php echo $_GET['error5']; 
        ?></p>
        <?php } 
        ?><br>
    </div>
    <div class = "date">
        Enter your date of birth: <br>
        Date<input type="number" name="date" id="dd">Month<input type="number" name="month" id="mm">Year <input type="number" name="year" id="yy">(dd/mm/yy) <br><br>
        <?php if (isset($_GET['error6'])) { ?>
        <p class="error" style="color:red"><?php echo $_GET['error6']; 
        ?></p>
        <?php } 
        ?><br>
        
    </div>

    <input type="submit" name="sub"> <input type="reset" name = "res">
    
    
    </form>
</body>
</html>