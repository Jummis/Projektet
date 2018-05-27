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

        
          <h3> Hälsoklienter </h3><br><hr>

          <?php

          $get = "SELECT * FROM u";
          $result = $connection->query($get);

          while($row = mysqli_fetch_assoc($result)){       
              echo "<p1> AnvändarID: " . $row["userID"] ."</p1><br>";
              echo "<p1>" . $row["fname"] ." </p1>";
              echo "<p1>" . $row["lname"] ."</p1><br>";
              echo "<p1>" . $row["email"] ."</p1><br>";
              echo "<p1>" . $row["gender"] ."</p1><br><br><hr>";
          }
          ?>


      </div>

      </body>
</html>