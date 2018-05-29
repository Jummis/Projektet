<?php
include "sessioncoach.php";
include "coachchangepassword.php";
include "showCoachInfo.php";
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
      <a id = "Tillbaka" href="coachMyPage.php">Tillbaka</a>
      <div id= "wrappersettings">
        <div id ="wrapperInnehåll">
          <br><img id = "user" src="assets/user.png"><br><br>
          <p3> Coach: <?php echo $_SESSION['User']; ?> </p3><br>
          <p2> CoachID:  <?php echo $_SESSION['CoachID']; ?> </p2><br><br>
          <div id ="profileButton"><br>         
            <a href='C_historik.php'><input type="submit" id ="updateButton" name="updateButton" value="Dina hälsoklienter" onsubmit="C_historik.php"></a>
            <br><br><a href='updateCoachInfo.php'><input type="submit" id ="updateButton" name="updateButton" value="Uppdatera information" onsubmit="updateInfo.php"></a>
          </div>
        </div>
      </div>
    </body>
</html>


