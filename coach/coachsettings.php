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

      <a id = "Tillbaka" href="coachMyPage.php">Tillbaka</a>

      <div id= "wrappersettings">

        
          <h3> Hantera konton </h3><br>

          <div id ="profileButton">
              <a href='allclients.php'><input type="submit" id ="updateButton" name="updateButton" value="Alla hälsoklienter" onsubmit="allclients.php"></a>
            <br><br><a href='searchclient.php'><input type="submit" id ="updateButton" name="updateButton" value="Sök hälsoklient"></a>
          <br><br><a href='search.php'><input type="submit" id ="updateButton" name="updateButton" value="Sök pågående live-forum"></a>
          <br><br><a href='searcharchive.php'><input type="submit" id ="updateButton" name="updateButton" value="Sök arkiverade live-forum"></a>
          </div>
      </div>


      </div>

      </body>
</html>