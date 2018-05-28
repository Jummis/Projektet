<?php
include 'sessioncoach.php';
include '../connection.php';
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

      <a id = "Tillbaka" href="coachsettings.php">Tillbaka</a>

      <div id= "wrapperMyProfile">
   
          <h3> Hälsoklienter </h3><br>
          <div id="show">
          <?php

          $get = "SELECT * FROM u";
          $result = $connection->query($get);

          while($row = mysqli_fetch_assoc($result)){       
              echo "<p2> AnvändarID: " . $row["userID"] ."</p2><br>";
              echo "<p2>" . $row["fname"] ." </p2>";
              echo "<p2>" . $row["lname"] ."</p2><br>";
              echo "<p2>" . $row["email"] ."</p2><br>";
              echo "<p2>" . $row["gender"] ."</p2><br><br><hr>";
          }
          ?>
          </div>

      </div>

      </body>
</html>