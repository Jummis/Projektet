<?php
include_once '../connection.php';
include_once 'validateCoachLogIn.php';
?>

<html>

    <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Hälsocoachen</title>
    <link rel = "stylesheet" href = "assets/maincoach.css">
    <link href="https://fonts.googleapis.com/css?family=News+Cycle" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    </head>
    
<body>
<!--<img id = "headerIMG" src="https://preview.ibb.co/kgnb5d/HEADERBILD.jpg">-->

<header>
 <ul>

  <a id = "Logga">VÄLKOMMEN HÄLSOCOACH</a>
  
</ul>
</header>

<div id = wrapper><br>
<img id = "user" src = "https://image.ibb.co/edWLgJ/default_user_image.png">
<br><br>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

                <br>
                <input type="text" id = "emailBox" name="email" title="email" style="color:#888;" 
                placeholder="E-postadress" value = "<?php echo $email;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)" />
                <br><p3><?php echo $email_error; ?> </p3>

                <input type="password" id="passBox" name="password" title="password" style="color:#888;" 
                placeholder="Lösenord" value = "<?php echo $password;?>" onfocus="inputFocus(this)" onblur="inputBlur(this)" />
                <br> <p3> <?php echo $password_error; ?> </p3>

                <input type="submit" name="submit" id="submit" value="Logga in">
        </form>

</div>


</body>

</html>