<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "EP.css"/>
    <title>Edit Profile</title>
</head>
<body>
    <div class = "one">
        <div class = "left">
        <span id = "tn"><b> <label id = "x" >X</label> company</b></span></div>
        <div class = "right">
            Logged in as <a href="">Bob</a> | <a href="">Logout</a>      
        </div>  
    </div> 
       
       <form class = "fm"><br> 
         Name              :
        <input type="text" name="name" id = "reg" /><hr>
         Email             :
        <input type="email" name="email" id = "reg" /><hr>
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
        Date of Birth: <input type="text" name="date" id="dd"><br><br>(dd/mm/yy) <br><hr>
    </div>
    <input type="submit" name = "sub">
   </form>
    <nav>
    <br> 
        Account <hr>
        <ol>   
        <li><a href=""> Dashboard </a></li>
            <li><a href="">View Profile </a></li>
            <li><a href="">Edit Profile</a></li>
            <li><a href="">Change Profile Picture</a></li>
            <li><a href="">Change Password</a></li>
            <li><a href="">Logout</a></li>
        </ol>
    </nav>
    <div class = "end"> copyright &copy 2017</div>
   

</body>

</html>