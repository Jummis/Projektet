<?php   
    include_once '../connection.php';
    include_once '../session.php';
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
            <li><a href="myPage.php">MINA SIDOR</a></li>
            <li><a href="chatOptions.php" class="active">LIVEFORUM</a></li>
            <li><a href="logout.php">LOGGA UT</a></li>
        </ul>
    </header>
    <a id = "Tillbaka" href="C_options/C_food.php">Tillbaka</a>

    <div id="chatcontainer2">
        <form name="chat" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type = "text" placeholder = "AnvändarID" id = "inputBox" name = "userID">
            <input type="submit" name="submitmsg" value="LÄS" id="sendmessage">
            </form>
        <div id="show">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == 'POST'){
                    $userID = $connection->real_escape_string($_POST['userID']);

                    $nameCoach = $_SESSION['User'];

                    $userimg = '<img id ="userchatt" src="https://image.ibb.co/edWLgJ/default_user_image.png" alt="default_user_image">';
                    $coachimg = '<img id ="userchatt" src="../assets/img/u_img_yellow.png">';

                    // besvarade meddelanden 
                    $answered = "SELECT * FROM Client_Message WHERE clientID = '$userID' AND coachMsgID IS NOT NULL";
                    $a = $connection->query($answered);

                    //obesvarade meddelanden
                    $notanswered = "SELECT * FROM Client_Message WHERE clientID = '$userID' AND coachMsgID IS NULL";
                    $na = $connection->query($notanswered);
       
                    while($row = mysqli_fetch_assoc($a)){       

                            $getData = "SELECT * FROM Coach_Message WHERE clientMsgID = '".$row['clientMsgID']."'";
                            $resultData = $connection->query($getData);

                            while($row2 = mysqli_fetch_assoc($resultData)){
                                $getName= "SELECT * FROM u WHERE userID = '$userID'";
                                $resultName = $connection->query($getName);

                                while ($row3 = mysqli_fetch_assoc($resultName)) {
                                    echo "<p5>" . $row["datum"] ."</p5>";
                                    echo "<h5>" . $userimg . " " . $row3['fname']."</h5>";  
                                    echo "<p6>" . $row["message_client"] ."</p6>"."<br><br>"; 
                                    echo "<p5>" . $row["submitted"] ."</p5><br>";
                                    echo "<p5> MeddelandeID: " . $row["clientMsgID"] ."</p5><br><hr>";

                                    $getNameC= "SELECT * FROM Coach WHERE coachID = '".$row2['coachID']."'";
                                    $resultNameC = $connection->query($getNameC);
                                    while ($row5 = mysqli_fetch_assoc($resultNameC)) {
                                        echo "<p5>" . $row2["datum"] ."</p5>";
                                        echo "<h5>" . $coachimg . " " . $row5["fname"]." (Coach)</h5>";
                                        echo "<p6>" . $row2["message_coach"] ."</p6>"."<br><br>"; 
                                        echo "<p5>" . $row2["submitted"] ."</p5><br><hr>"; 
                                    }
                                     
                                    while($row4 = mysqli_fetch_assoc($na)){  
                                        if ($row["message_client"] != NULL) {
                                             echo "<p5>" . $row4["datum"] ."</p5>";
                                            echo "<h5>" . $userimg . " " . $row3['fname']."</h5>";  
                                            echo "<p6>" . $row4["message_client"] ."</p6>"."<br>"."<br>";
                                            echo "<p5> MeddelandeID: " . $row["clientMsgID"] ."</p5><br><hr>"; 
                                        }                                               
                                    }                             
                                }                                         
                        }       
                    }    
                }      
            ?>
        </div>
      </div>
    </body>
</html>
