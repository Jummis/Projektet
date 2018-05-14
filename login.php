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
<img id = "user" src = "https://image.ibb.co/edWLgJ/default_user_image.png">
<br><br>
<a href = 'register.php'><p2> Till registreringen </p2> </a>
<br>
<br>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

                <div id = "form">
                <br>
                <input type="text" name="email" title="email" style="color:#888;" 
                placeholder="E-postadress" value = "<?php echo $email;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)" />
                <br><p2><?php echo $email_error; ?> </p2><br>
                <br>
                <input type="password" name="password" title="password" style="color:#888;" 
                placeholder="Lösenord" value = "<?php echo $password;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)" />
                <br> <p2> <?php echo $password_error; ?> </p2><br>

                <br>

                <input type="submit" name="submit" id="submit" value="Logga in">
        </form>

        <br><br>
</div>


</body>
</head>
</html>