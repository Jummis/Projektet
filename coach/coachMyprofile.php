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

      <div id= "wrapperMyProfile">

        <img id = "user" src="assets/user.png"><br><br>
          <p3> Hej Coach <?php echo $_SESSION['User']; ?> </p3><br>
          <p2> Detta är din profil. Här kan du uppdatera dina information. </p2><br><br>
        

          <p2>Förnamn<br></p2><?php echo $fname; ?><br><br>
          <p2>Efternamn<br></p2><?php echo $lname; ?><br><br>
          <p2>Personnummer<br></p2> <?php echo $pNr; ?><br><br>
          <p2>Epostadress<br></p2> <?php echo $email; ?><br><br>

          <div id ="profileButton">
            <a href='updateCoachInfo.php'><input type="submit" id ="updateButton" name="updateButton" value="Uppdatera information" onsubmit="updateInfo.php"></a>
          </div>
      </div>

    </body>
</html>



