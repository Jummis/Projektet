<?php
include_once 'connection.php';
include_once 'validateLogin.php';
?>

<html>
<head>
    <title> Hälsocoachen </title>
    <link rel = "stylesheet" href = "main.css">
<body>
<div id = "header">

<img id = "headerIMG" src="https://preview.ibb.co/kgnb5d/HEADERBILD.jpg">

 <ul>
  <li><a href="default.asp">VAD ÄR HÄLSOCOACHING?</a></li>
  <li><a href="news.asp">OM OSS</a></li>
  <li><a href="login.php">LOGGA IN/REGISTRERA</a></li>
</ul> 
</div>

<div id = wrapper><br>
<h> LOGGA IN </h> <br>
<a href = 'register.php'><p2> Inte registrerad? </p2> </a>
<br>
<br>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

                <div id = "form">
                <br>
                <input type="text" name="email" id="email" value = "Email" value = "<?php echo $email;?>"> <br>
                <p1> <?php echo $email_error; ?> </p1><br>

                
                <br>
                <input type = "text" name="password" id ="password" value = "Lösenord" value = "<?php echo $password;?>"><br>
                <p1> <?php echo $password_error; ?> </p1><br>

                <br>

                <input type="submit" name="submit" id="submit" value="Logga in">
        </form>

        <br><br>
</div>


</body>
</head>
</html>