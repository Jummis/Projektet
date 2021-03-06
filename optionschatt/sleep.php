<?php   
    include_once '../connection.php';
    include '../session.php';
    include_once 'savesleepMsg.php';
    date_default_timezone_set('Europe/Stockholm');
?>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Hälsocoachen Chatt</title>
        <link rel = "stylesheet" href = "../assets/main.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <script src="assets/js/main.js"></script>
    </head>

    <body>
        <header>
            <ul>
              <div id "logoAll">
                <img id = "holdingHands" src = "../assets/img/hands-holding-heart.png">
                <a id = "Logga" href="../userHome.php">HÄLSOCOACHEN</a>
                <li><a href="../myPage.php">MINA SIDOR</a></li>
                <li><a href="../chatOptions.php" class="active">LIVEFORUM</a></li>
                <li><a href="../logout.php">LOGGA UT</a></li>  
                <li><a href=""> </a></li>
                <li><a href=""> </a></li>
              </div>
            </ul>
        </header>

        <a id = "Tillbaka" href="../chatOptions.php">Tillbaka till alternativen</a><br>
        <a id = "Tillbaka" href="../userHome.php">Lämna forum</a>
        <div id= "welcome">
            <h1> Välkommen till ditt liveforum <?php echo $_SESSION['User']; ?>!</h1>
            <p1> Skicka ett meddelande så kommer någon av<br>
                  våra hälsocoacher snart att svara dig. </p1><br>
            
        </div>
        <div id="chatcontainer">
            <p3> Ditt valda hälsotema är: SÖMN </p3>
            <div id="chatbox">
                 <?php
                    $name = $_SESSION['User'];
                    $userID = $_SESSION['ID'];

                    $userimg = '<img id ="userchatt" src="https://image.ibb.co/edWLgJ/default_user_image.png" alt="default_user_image">';
                    $coachimg = '<img id ="userchatt" src="../assets/img/u_img_yellow.png">';

                    //obesvarade meddelanden
                    $notanswered = "SELECT * FROM Client_Message WHERE forum_type = 'sleep' AND clientID = '$userID' AND coachMsgID IS NULL";
                    $na = $connection->query($notanswered);

                    //hämtar besvarade meddelanden
                    $answer = "SELECT * FROM Client_Message WHERE forum_type = 'sleep' AND clientID = '$userID' AND coachMsgID IS NOT NULL";
                    $a = $connection->query($answer);  

                        while ($row1 = mysqli_fetch_assoc($a)) {
                            $getData = "SELECT * FROM Coach_Message WHERE clientMsgID = '".$row1['clientMsgID']."'";
                            $resultData = $connection->query($getData);

                            while($row2 = mysqli_fetch_assoc($resultData)){                      
                                $coachID = $row2["coachID"];
                                $getName= "SELECT * FROM Coach WHERE coachID = '$coachID'";
                                $resultName = $connection->query($getName);

                                while ($row3 = mysqli_fetch_assoc($resultName)) {
                                    echo "<p5>" . $row1["datum"] ."</p5>";
                                    echo "<h5>" . $userimg . " " . $name."</h5>";  
                                    echo "<p6>" . $row1["message_client"] ."</p6>"."<br><br>"; 
                                    echo "<p5>" . $row1["submitted"] ."</p5><br><hr>";

                                    echo "<p5>" . $row2["datum"] ."</p5>";
                                    echo "<h5>" . $coachimg . " " . $row3["fname"]." (Coach)</h5>";
                                    echo "<p6>" . $row2["message_coach"] ."</p6>"."<br><br>"; 
                                    echo "<p5>" . $row2["submitted"] ."</p5><br><hr>";                             
                                }                        
                            }
                        }       
                       
                     while($row = mysqli_fetch_assoc($na)){  
                         if ($row["message_client"] != NULL) {
                            echo "<p5>" . $row["datum"] ."</p5>";
                            echo "<h5>" . $userimg . " " . $name."</h5>";  
                            echo "<p6>" . $row["message_client"] ."</p6>"."<br>"."<br><hr>"; 
                         }                                               
                    }        
            ?>
            </div>

            <div class="historyButtons">
                <form name="chat" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <textarea placeholder="Vänligen skriv ditt meddelande här" name="usersleepmsg" id="usermsg"></textarea><br>
                    <input type="submit" name="submitmsg" value="SKICKA" id="sendmessage">
                    <a href = "sleep.php"> <img id = "update" src = "../assets/img/update-arrows.png"></a>
                </form>           
            </div> 
        </div>
        <a href='archivesleep.php'><input type="submit" name="closeForumKnapp" value="Avsluta forum och arkivera konsversationen" id="closeForumKnapp"></a>
    </body>
    <footer>
        <p id="kontaktrubrik">HÄLSOCOACHEN</p>
        <p id="kontaktuppg">Kontaktuppgifter</p>
        <div class="row">
            <div class="column">
                <img src="https://image.ibb.co/bUdviy/phone_call_1.png"><br><br>
                <p3> 0703457947 </p3>
            </div>
            <div class="column">
                <img src="https://image.ibb.co/jSQmqd/envelope.png"><br><br>
                <p3> halsocoachen@coach.se </p3>
            </div>
        </div> 
        <p8>Hälsocochen Sjukvård<br> Hälsocoachen Psykolog</p8>
    </footer>
</html>