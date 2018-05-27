<?php   
    include_once '../connection.php';
    include_once 'sessioncoach.php';
    include_once 'saveCoachMessage.php';
    date_default_timezone_set('Europe/Stockholm');
?>

<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Chatt</title>
        <link rel = "stylesheet" href = "assets/maincoach.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    </head>

    <body>
    <header>
        <ul>
            <a id = "Logga" href="index.php">HÄLSOCOACHEN</a>
            <li><a href="coachMypage.php">MINA SIDOR</a></li>
            <li><a href="chatOptions.php" class="active">LIVEFORUM</a></li>
            <li><a href="logout.php">LOGGA UT</a></li>
            <li><a href="">Något mer</a></li>
        </ul>
    </header>

        <a id = "Tillbaka" href="chatOptionsCoach.php">Tillbaka</a>
        <div id= "welcome">
            <h2>Hej Coach <?php echo $_SESSION['User']; ?>!</h2><br>
        </div>

        <div id="chatcontainer2">
            <div id="chatbox">

                <?php
                    $getClientData = "SELECT * FROM Client_Message WHERE coachMsgID IS NULL";
                    $resultClient = $connection->query($getClientData);

                    $userimg = '<img id ="userchatt" src="https://image.ibb.co/edWLgJ/default_user_image.png" alt="default_user_image">';
                    $coachimg = '<img id ="userchatt" src="../assets/img/u_img_yellow.png">';

       
                    while($row = mysqli_fetch_assoc($resultClient)){       

                            $getData = "SELECT * FROM u WHERE userID = '".$row['clientID']."'";
                            $resultData = $connection->query($getData);

                            while($row1 = mysqli_fetch_assoc($resultData))
                            {
                                echo "<p5>" . $row["datum"] ."</p5>";
                                echo "<h5>" . $userimg . " " . $row1['fname']."</h5>";  
                                echo "<p6>" . $row["message_client"] ."</p6>"."<br><br>"; 
                                echo "<p5>" . $row["submitted"] ."</p5><br>";
                                echo "<p8>" . "MeddelandeID: " . $row["clientMsgID"] ."</p8>"."<br>";
                                echo "<a href = read.php> Läs konversation med användare " . $row["clientID"] ." </a><hr>";  
                      
                            }
                        }              
            ?>

            </div>
            
            <form name="chat" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">    
                <input type = "text" placeholder = "Ange meddelande ID du svarar på" id = "inputBox2" name = "number"><br>
                <textarea placeholder="Vänligen skriv ditt meddelande här" name="coachmsg" id="coachmsg"></textarea><br>
                <input type="submit" name="submitmsg" value="SVARA" id="sendmessage">
            </form>
        </div>
        <a href='coachMypage.php'>
        <input type="submit" name="closeForumKnapp" value="LÄMNA FORUM" id="closeForumKnapp" onsubmit="coachMypage.php">
        </a>
    </body>
</html>

