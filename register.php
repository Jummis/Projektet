<?php
    include_once 'connection.php';
    include_once 'registerUser.php';

?>

<html>
<head>
    <title> Hälsocoachen - Registrering </title>
    <link rel = "stylesheet" href = "assets/css/main.css">
</head>
<body>

<header>
 <ul>

  <a id = "Logga" href="index.php">HÄLSOCOACHEN</a>
  <li><a href="info.php">VAD ÄR HÄLSOCOACHING?</a></li>
  <li><a href="omoss.php">OM OSS</a></li>
  <li><a href="login.php">LOGGA IN/REGISTRERA</a></li>
  
</ul>
</header>

    <div id="wrapper1"><br>
    <img id = "user" src = "https://image.ibb.co/edWLgJ/default_user_image.png"><br><br>
    <p3>Har du redan ett konto?</p3><p3><a href = 'login.php'> Logga in </p3> </a> <br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

                <input type="text" name="firstname" title="firstname" style="color:#888;" 
                placeholder="Förnamn" value = "<?php echo $fname;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)"><br><br>

                <input type="text" name="lastname" title="lastname" style="color:#888;" 
                placeholder="Efternamn" value = "<?php echo $lname;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)"/><br><br>

                <input type="birth" name="birth" title="birth" style="color:#888;" 
                placeholder="YYYY-MM-DD" value = "<?php echo $birthnumber;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)"><br><br>

                <div class="rowRadio">
                <div class="columnRadio">
                <input type="radio" name="gender" id = "gender" value="Man" class = "radio"> <br>
                Man
                </div>
                <div class="columnRadio">
                <input type="radio" name="gender" id = "gender" value="Kvinna" class = "radio"><br>
                 Kvinna
                </div>
                </div>
                
                <input type="text" name="email" title="email" style="color:#888;" 
                placeholder="E-postadress" value = "<?php echo $email;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)"/><br><br>

                <input type="password" name="password" title="password" style="color:#888;" 
                placeholder="Välj ett lösenord" value = "<?php echo $password;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)"/><br>
                <br><br><p3><?php echo $field_error; ?> </p3>

                <input type="submit" name="submit" id="submit" value="REGISTRERA DIG">  <br>          
        </form>
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