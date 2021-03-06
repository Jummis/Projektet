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
            <div id = "wrapper5">
                <img id = "user" src="assets/user.png"><br><br>
                <p3> Coach: <?php echo $_SESSION['User']; ?> </p3><br>
                <p2> CoachID:  <?php echo $_SESSION['CoachID']; ?> </p2><br><br>
                <p3> Dina hälsoklienter </p3>
            </div>

            <div id="show">
                <?php
                    $coachID = $_SESSION['CoachID'];

                    $sqlget = "SELECT DISTINCT coachID, clientMsgID FROM Coach_Message WHERE coachID = '".$coachID."'";
                    $result = $connection->query($sqlget);

                        while($row = mysqli_fetch_assoc($result)){  
                            $sql = "SELECT clientID FROM Client_Message WHERE clientMsgID = '".$row['clientMsgID']."'";
                            $result2 = $connection->query($sql);
                            
                            while ($row1 = mysqli_fetch_row($result2)){
                                $result3 = $row1[0];
                            }

                        }
                        $sqlgetU = "SELECT DISTINCT userID, fname, lname FROM u WHERE userID = '".$result3."'";   
                        $resultU = $connection->query($sqlgetU);  
                
                            while ($row3 = mysqli_fetch_assoc($resultU)){
                                echo "<p6> AnvändarID: " . $row3['userID']."</p6><br>"; 
                                echo "<p6>" . $row3['fname']." </p6>";  
                                echo "<p6>" . $row3['lname']."</p6><hr>";   
                            }                         
                ?>
            </div>
        </div>
    </body>
</html>
