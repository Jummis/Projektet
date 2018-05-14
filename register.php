<?php
    include_once 'connection.php';
    include_once 'registerUser.php';

?>

<html>
<head>
    <title> Hälsocoachen - Registrering </title>
    <link rel = "stylesheet" href = "main.css">
<body>


 <ul>
     <h> HÄLSOCOACHEN </h>
  <li><a href="default.asp">VAD ÄR HÄLSOCOACHING?</a></li>
  <li><a href="news.asp">OM OSS</a></li>
  <li><a href="login.php">LOGGA IN/REGISTRERA</a></li>
</ul> 

    <div id="wrapper"><br>
    <img id = "user" src = "https://image.ibb.co/edWLgJ/default_user_image.png">
    <br><br>
    <p2> Har du redan ett konto?<a href = 'login.php'><p2> Logga in </p2> </a><br><br>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

                <input type="text" name="firstname" title="firstname" style="color:#888;" 
                placeholder="Förnamn" value = "<?php echo $fname;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)" />
                <br><p2><?php echo $fname_error; ?> </p2><br>

                <input type="text" name="lastname" title="lastname" style="color:#888;" 
                placeholder="Efternamn" value = "<?php echo $lname;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)" />
                <br><p2><?php echo $lname_error; ?> </p2><br>
                
                <div id = "button"><input type="radio" name="gender" id = "gender" value="Man"> Man<br></div>
                <div id = "button"><input type="radio" name="gender" id = "gender" value="Kvinna" > Kvinna</div>

                <br><br>
                <input type="birth" name="lastname" title="lastname" style="color:#888;" 
                placeholder="Födelsedatum" value = "<?php echo $lname;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)" />
                <br><p2><?php echo $lname_error; ?> </p2><br>

                <input type="text" name="email" title="email" style="color:#888;" 
                placeholder="E-postadress" value = "<?php echo $email;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)" />
                <br><p2><?php echo $email_error; ?> </p2><br>

                <input type="password" name="password" title="password" style="color:#888;" 
                placeholder="Välj ett lösenord" value = "<?php echo $password;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)" />
                <br><p2><?php echo $password_error; ?> </p2><br>

                <br>

                <input type="submit" name="submit" id="submit" value="REGISTRERA DIG">                
        </form>
</div>

</body>
</head>
</html>