<?php
include "sessioncoach.php";
include "coachhangepassword.php";
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

      <header>
        <ul>
          <a id = "Logga" href="coachMyPage.php">HÄLSOCOACHEN</a>
          <li><a href="logoutCoach.php">LOGGA UT</a></li>
        </ul>
      </header>

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
      Nuvarande lösenord: <input type="password" id="currentPassword" name="currentPassword" title="currentPassword" style="color:#888;" 
      placeholder="Fyll i ditt nuvarande lösenord"><br>
      <br> <p3> <?php echo $passwordErr; ?> </p3>
      
      Nytt lösenord: <input type="password" id="newPassword" name="newPassword" title="newPassword" style="color:#888;" 
      placeholder="Fyll i ditt nya lösenord"><br>

      Återge ditt nya lösenord igen: <input type="password" id="confirmPassword" name="confirmPassword" title="confirmPassword" style="color:#888;" 
      placeholder="Fyll i ditt nya lösenord"><br>
      <br> <p3> <?php echo $passwordErr; ?> </p3>

      <input type="submit" name="submit"value="Updatera lösenord">

      </form>

    </body>
</html>