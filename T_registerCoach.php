<?php
  include_once 'connection.php';
  include_once 'T_register-process.php';
?>

<html>
  <head>
    <title> Hälsocoachen - Registrering </title>
      <link rel = "stylesheet" href = "coach/assets/maincoach.css">
  </head>
  <body>

    <header>
      <ul>
        <a id = "Logga">REGISTRERA NY HÄLSOCOACH</a>  
      </ul>
    </header>

    <div id="wrapper1"><br>
      <img id = "user" src = "https://image.ibb.co/edWLgJ/default_user_image.png"><br><br>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

        <input type="text" id = "inputBox" name="firstname" title="firstname" style="color:#888;" 
        placeholder="Förnamn" value = "<?php echo $fname;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)"><br><br>

        <input type="text" id = "inputBox" name="lastname" title="lastname" style="color:#888;" 
        placeholder="Efternamn" value = "<?php echo $lname;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)"/><br><br>

        <input type="birth" id = "inputBox" name="birth" title="birth" style="color:#888;" 
        placeholder="YYYY-MM-DD" value = "<?php echo $birthnumber;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)"><br><br>

        <div class="rowRadio">
          <div class="columnRadio">
            <input type="radio" name="gender" id = "gender" value="Man" class = "radio"> <br>
            Man
          </div>
          <div class="columnRadio">
            <input type="radio" id = "inputBox" name="gender" id = "gender" value="Kvinna" class = "radio"><br>
             Kvinna
          </div>
        </div>
                
        <input type="text" id = "inputBox" name="email" title="email" style="color:#888;" 
        placeholder="E-postadress" value = "<?php echo $email;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)"/><br><br>

        <input type="password"id = "inputBox" name="password" title="password" style="color:#888;" 
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
    <p8>Hälsocochen Sjukvård<br> Hälsocoachen Psykolog</p8>
  </footer>
</html>