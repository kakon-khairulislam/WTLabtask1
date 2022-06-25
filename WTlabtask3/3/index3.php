<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "c3.css"/>
    <title>Profile picture</title>
</head>
<body>
    <form action="upload.php" method= "POST" class="form" enctype="multipart/form-data">
        <h1>Profile Picture</h1>
        <img src="user.jpg" alt="user"><br>
        <input type="file" name = "pic" id="b1"><hr>
        <input type="submit" name = "submit">
    </form>
</body>
</html>
