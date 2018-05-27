<?php
include 'sessioncoach.php';
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

      <div id ="wrapper3">
      <div class="row">

        <div class="column">
          <a href = "logoutCoach.php"><img id = "infoIMG" src="assets/exit.png"></a><br><br>
          <p3> Logga ut </p3>
        </div>

        <div class="column">
          <a href = "coachsettings.php"><img id = "infoIMG" src="assets/settings.png"><br><br>
          <p3> Inställningar </p3>
        </div>

        <div class = "column">
          <a href = "coachMyprofileChoose.php"><img id = "infoIMG" src="assets/user.png"><br><br>
          <p3> Min Profil </p3>
        </div>
        
        <div class = "column">
          <a href = "chatOptionsCoach.php"><img id = "infoIMG" src="assets/forum.png"></a><br><br>
          <p3> Forum </p3>
      </div>

      </div>
      </div>

      </body>
</html>
