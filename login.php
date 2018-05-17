<?php
include_once 'connection.php';
include_once 'validateLogin.php';
?>

<html>
<head>
    <title> Hälsocoachen </title>
    <link rel = "stylesheet" href = "main.css">
    <link href="https://fonts.googleapis.com/css?family=News+Cycle" rel="stylesheet">
</head>
<body>

 <ul>
  <a href="index.php"><img id="rubrik" src="https://preview.ibb.co/hAiy5d/logo.jpg"></a>
  <li><a href="default.asp">VAD ÄR HÄLSOCOACHING?</a></li>
  <li><a href="news.asp">OM OSS</a></li>
  <li><a href="login.php">LOGGA IN/REGISTRERA</a></li>
  
</ul>


<div id = wrapper><br>
<img id = "user" src = "https://image.ibb.co/edWLgJ/default_user_image.png">
<br><br>
<p3>Har du inget konto?</p3><p3><a href = 'register.php'> Registrera dig </p3> </a>
<br><br>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

                <br>
                <input type="text" name="email" title="email" style="color:#888;" 
                placeholder="E-postadress" value = "<?php echo $email;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)" />
                <br><p3><?php echo $email_error; ?> </p3><br>
                <br>
                <input type="password" name="password" title="password" style="color:#888;" 
                placeholder="Lösenord" value = "<?php echo $password;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)" />
                <br> <p3> <?php echo $password_error; ?> </p3><br>

                <br>

                <input type="submit" name="submit" id="submit" value="Logga in">
        </form>

        <br><br>
</div>


</body>

<footer>
<p id="kontaktrubrik">HÄLSOCOACHEN</p>
<p id="kontaktuppg">Kontaktuppgifter</p>


 <div class="row">
  <div class="column">
    <img src="https://image.ibb.co/bUdviy/phone_call_1.png"><br>
    <p3> 0703457947 </p3>
  </div>
  <div class="column">
    <img src="https://image.ibb.co/jSQmqd/envelope.png"><br>
    <p3> halsocoachen@coach.se </p3>
  </div>
</div> 

</footer>
</html>