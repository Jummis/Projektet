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

      <a id = "Tillbaka" href="coachMyProfile.php">Tillbaka</a>

      <div id= "wrapperMyProfile">
        <img id = "user" src="assets/user.png"><br><br>

        <form action = "updateInfoCoachProcess.php" method = "POST">
          <div id="personligaUppg">
            <p7>Förnamn<br></p7><input type="text" id = "newfName" name="newfName" value="<?php echo $fname; ?>"><br><br>
            <p7>Efternamn<br></p7><input type="text" id = "newfName" name="newlName" value="<?php echo $lname; ?>"><br><br>
            <p7>Personnummer<br></p7><?php echo $pNr; ?><br><br>
            <p7>Epostadress<br></p7><input type="text" id = "newfName" name="newEmail" value="<?php echo $email; ?>"><br><br>
            <p7>Nuvarande lösenord<br></p7><input type="password" id = "currentPassword" name="currentPassword"><br><br>
            <p7>Nytt lösenord<br></p7><input type="password" id = "currentPassword" name="newPassword"><br><br>
            <p7>Återge ditt nya lösenord<br></p7><input type="password" id = "currentPassword" name="confirmPassword"><br><br>
            <div id ="profileButtonSave">
            <a href='updateInfo.php'><input type="submit" id ="updateButton" name="saveButton" value="Spara" onsubmit="updateInfo.php"></a>
          </div>
        </form>
      </div>

    </body>
</html>