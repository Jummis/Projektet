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
          <p3> Coach: <?php echo $_SESSION['User']; ?> </p3><br>
          <p2> CoachID:  <?php echo $_SESSION['CoachID']; ?> </p2><br><br>

          <p3> Meddelande-Historik </p3>

          <form name="history" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="historyButtons">
                    <input type="submit" id ="updateButton" name="updateButton" class="buttonA" name = "food" value="KOST">
                    <input type="submit" id ="updateButton" name="updateButton" class="buttonA" name = "training" value="TRÄNING">
                    <input type="submit" id ="updateButton" name="updateButton" class="buttonA" name = "stress" value="STRESS">
                    <input type="submit" id ="updateButton" name="updateButton" class="buttonA" name = "sleep" value="SÖMN">
                    <input type="submit" id ="updateButton" name="updateButton" class="buttonA" name = "alcohol" value="ALKOHOL">
                    <input type="submit" id ="updateButton" name="updateButton" class="buttonA" name = "general" value="ALLMÄNT">
                </div>
            </form>
      </div>

    </body>
</html>
