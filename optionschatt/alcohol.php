<?php   
    include_once '../connection.php';
    include '../session.php';
    include_once 'savealcoholMsg.php';
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
        <a id = "Logga" href="index.php">HÄLSOCOACHEN</a>
        <li><a href="myPage.php">MINA SIDOR</a></li>
        <li><a href="chatOptions.php" class="active">LIVEFORUM</a></li>
        <li><a href="logout.php">LOGGA UT</a></li>
    </ul>
    </header>

        <a id = "Tillbaka" href="../chatOptions.php">Tillbaka till alternativen</a>
        <div id= "welcome">
            <h1> Välkommen till ditt liveforum <?php echo $_SESSION['User']; ?>!</h1>
            <p1> Skicka ett meddelande så kommer någon av<br>
                  våra hälsocoacher snart att svara dig. </p1><br>
            <h1> Ditt valda hälsotema är: Alkohol </h1>
        </div>

        <div id="chatcontainer">
            <p3> Dina obersvarade meddelanden</p3> <br>     <p3>Besvarade meddelanden </p3>
            <div id="chatbox">
                <?php
                    $name = $_SESSION['User'];
                    $userID = $_SESSION['ID'];

                    $userimg = '<img id ="userchatt" src="https://image.ibb.co/edWLgJ/default_user_image.png" alt="default_user_image">';
                    $coachimg = '<img id ="userchatt" src="../assets/img/u_img_yellow.png">';

                    // besvarade meddelanden 
                    $answered = "SELECT * FROM Client_Message WHERE forum_type = 'alkohol' AND clientID = '$userID' AND coachMsgID IS NOT NULL";
                    $a = $connection->query($answered);

                    //obesvarade meddelanden
                    $notanswered = "SELECT * FROM Client_Message WHERE forum_type = 'alkohol' AND clientID = '$userID' AND coachMsgID IS NULL";
                    $na = $connection->query($notanswered);

                    //hämtar besvarade meddelanden
                    $messageID = "SELECT * FROM Client_Message WHERE forum_type = 'alkohol' AND clientID = '$userID' AND coachMsgID IS NOT NULL";
                    $messageIDresult = $connection->query($messageID);
       
                    while($row = mysqli_fetch_assoc($a)){       

                        while ($row2 = mysqli_fetch_assoc($messageIDresult)) {
                        $coachanswer = "SELECT * FROM Coach_Message WHERE clientMsgID = '".$row2['clientMsgID']."'";
                        $result = $connection->query($coachanswer);

                         while($row1 = mysqli_fetch_assoc($result)){  
                             echo "<p5>" . $row["datum"] ."</p5>";
                            echo "<h5>" . $userimg . " " . $name."</h5>";  
                            echo "<p6>" . $row["message_client"] ."</p6>"."<br>"."<br><hr>"; 
                            echo "<p5>" . $row1["datum"] ."</p5>";
                            echo "<h5>" . $coachimg . " " . $row1["coachID"]." (Coach)</h5>";
                            echo "<p6>" . $row1["message_coach"] ."</p6>"."<br>"."<br><hr>";
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

            <form name="chat" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <textarea placeholder="Vänligen skriv ditt meddelande här" name="useralcoholmsg" id="usermsg"></textarea><br>
                <input type="submit" name="submitmsg" value="SKICKA" id="sendmessage">
            </form>
        </div>
        <a href='userHome.php'><input type="submit" name="closeForumKnapp" value="LÄMNA FORUM" id="closeForumKnapp" onsubmit="userHome.php"></a>
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

    </footer>
</html>