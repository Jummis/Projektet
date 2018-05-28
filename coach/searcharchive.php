<?php
include "sessioncoach.php";
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

      <a id = "Tillbaka" href="coachsettings.php">Tillbaka</a>

      <div id= "wrapperMyProfile">
      <div id = "wrappersearch">
        <h3> Sök i arkiverade live-forum </h3>
        <form name="chat" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

            <input type = "text" placeholder = "AnvändarID" id = "inputBox" name = "userID"><br>
            <input type="submit" name="submitmsg" value="LÄS" id="searchclient">

            </form>
        </div>

        <div id="show">

                <?php
                    if ($_SERVER["REQUEST_METHOD"] == 'POST'){
                        $userID = $connection->real_escape_string($_POST['userID']);

                        $nameCoach = $_SESSION['User'];
                        $coachID = $_SESSION['CoachID'];

                        $userimg = '<img id ="userchatt" src="https://image.ibb.co/edWLgJ/default_user_image.png" alt="default_user_image">';
                        $coachimg = '<img id ="userchatt" src="../assets/img/u_img_yellow.png">';

                        // besvarade meddelanden 
                        $answered = "SELECT * FROM Archive_Client_Message WHERE clientID = '$userID' AND coachMsgID IS NOT NULL";
                        $a = $connection->query($answered);

                        //obesvarade meddelanden
                        $notanswered = "SELECT * FROM Archive_Client_Message WHERE clientID = '$userID' AND coachMsgID IS NULL";
                        $na = $connection->query($notanswered);

                        //hämtar besvarade meddelanden
                        $messageID = "SELECT * FROM Archive_Client_Message WHERE clientID = '$userID' AND coachMsgID IS NOT NULL";
                        $messageIDresult = $connection->query($messageID);
       
                        while($row = mysqli_fetch_assoc($a)){       

                            while ($row1 = mysqli_fetch_assoc($messageIDresult)) {
                                $getData = "SELECT * FROM Archive_Coach_Message WHERE clientMsgID = '".$row1['clientMsgID']."'";
                                $resultData = $connection->query($getData);

                                while($row2 = mysqli_fetch_assoc($resultData))
                                {
                                    $getName= "SELECT * FROM u WHERE userID = '$userID'";
                                    $resultName = $connection->query($getName);

                                    while ($row3 = mysqli_fetch_assoc($resultName)) {
                                        echo "<p5>" . $row["datum"] ."</p5>";
                                        echo "<h5>" . $userimg . " " . $row3['fname']."</h5>";  
                                        echo "<p6>" . $row["message_client"] ."</p6>"."<br><br>"; 
                                        echo "<p5>" . $row["submitted"] ."</p5><br><hr>";

                                        echo "<p5>" . $row2["datum"] ."</p5>";
                                        echo "<h5>" . $coachimg . " " . $row3["fname"]." (Coach)</h5>";
                                        echo "<p6>" . $row2["message_coach"] ."</p6>"."<br><br>"; 
                                        echo "<p5>" . $row2["submitted"] ."</p5><br><hr>";  

                                        while($row4 = mysqli_fetch_assoc($na)){  
                                            if ($row["message_client"] != NULL) {
                                                echo "<p5>" . $row4["datum"] ."</p5>";
                                                echo "<h5>" . $userimg . " " . $row3['fname']."</h5>";  
                                                echo "<p6>" . $row4["message_client"] ."</p6>"."<br>"."<br><hr>"; 
                                        }                                               
                                    }                             
                                }                                         
                            }
                        }       
                    }    
                }      
            ?>
    </body>
</html>