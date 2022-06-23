<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "reg.css"/>
    <title>Registration</title>
</head>
<body>
<div class = "one">
        <div class = "left">
        <span id = "tn"><b> <label id ="x" >X</label> company</b></span></div>
        <div class = "right">
             <a href="">Home</a>| <a href="">Login</a> | <a href="">Registration</a>       
        </div>   
    </div>
<p><b>Registration</b></p>
    <form action="">
         Name              :
        <input type="text" name="name" id = "reg" /><hr>
         Email             :
        <input type="email" name="email" id = "reg" /><hr>
        User Name         :
        <input type="text" name="un" id = "reg" /><hr>
         Password          :
        <input type="pass" name="pw" id = "reg" /><hr>
         Confirm password  :
        <input type="pass" name="cpw" id = "reg" /><hr><br>
    <div class="gen">
      Your Gender :
        <input type="radio" id="M" name="YG" value="Male">
        <label for="M">Male</label>
        <input type="radio" id="F" name="YG" value="Female">
        <label for="F">Female</label>
        <input type="radio" id="O" name="YG" value="Other">
        <label for="O">Other</label> <br><br>
    </div>
    <div class = "date">
        <input type="number" name="date" id="dd">/   <input type="number" name="month" id="mm">/   <input type="number" name="year" id="yy">(dd/mm/yy) <br><br>
    </div>

    <input type="submit" name="sub"> <input type="reset" name = "res">
</body>
</html>