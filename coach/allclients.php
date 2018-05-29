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
                        echo "<p9> AnvändarID: " . $row["userID"] ."</p9><br>";
                        echo "<p9>" . $row["fname"] ." </p9>";
                        echo "<p9>" . $row["lname"] ."</p9><br>";
                        echo "<p9>" . $row["email"] ."</p9><br>";
                        echo "<p9>" . $row["gender"] ."</p9><br><br><hr>";
                    }
                  ?>
              </div>
           </div>
    </body>
</html>