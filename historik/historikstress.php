<?php
include_once "../connection.php";
include "../session.php";
?>

<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Hälsocoachen Loggbok</title>
        <link rel = "stylesheet" href = "../assets/main.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>

    <body>
        <header>
            <ul>   
                <a id = "Logga" href="../index.php">HÄLSOCOACHEN</a>
                <li><a href="../myPage.php" class="active">MINA SIDOR</a></li>
                <li><a href="../chatOptions.php"> LIVEFORUM</a></li>
                <li><a href="../logout.php">LOGGA UT</a></li> 
            </ul>
        </header>


        <div id = "wrapper4">
            <div id = "wrapperLogg">
                <p id="rubrikLoggbok">Din historik: Stress</p>
                <div id="historikbox">
                    <?php
                        $name = $_SESSION['User'];
                        $userID = $_SESSION['ID'];

                        $userimg = '<img id ="userchatt" src="https://image.ibb.co/edWLgJ/default_user_image.png" alt="default_user_image">';
                        $coachimg = '<img id ="userchatt" src="../assets/img/u_img_yellow.png">';

                        //obesvarade meddelanden
                        $notanswered = "SELECT * FROM Archive_Message_Client WHERE forum_type = 'stress' AND clientID = '$userID' AND coachMsgID IS NULL";
                        $na = $connection->query($notanswered);

                        //hämtar besvarade meddelanden
                        $answer = "SELECT * FROM Archive_Message_Client WHERE forum_type = 'stress' AND clientID = '$userID' AND coachMsgID IS NOT NULL";
                        $a = $connection->query($answer);  

                        while ($row1 = mysqli_fetch_assoc($a)) {
                            $getData = "SELECT * FROM Archive_Message_Coach WHERE clientMsgID = '".$row1['clientMsgID']."'";
                            $resultData = $connection->query($getData);

                            while($row2 = mysqli_fetch_assoc($resultData))
                            {                      
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
                                echo "<p6>" . $row["message_client"] ."</p6>"."<br>"."<br>"; 
                                echo "<p5>" . $row["submitted"] ."</p5><br><hr>";  
                            }                                               
                        }        
                    ?>  
                </div>
            </div>

            <div class="leftmenu">
                <a href="historik.php" class = "veryactive">TILLBAKA</a>
                <a href="../files.php">FILER</a>
                <a href="../myProfile.php">MIN PROFIL</a>
                <a href="../loggbok.php">LOGGBOK</a>
                <a href="../historik.php" class = "active">HISTORIK</a>
            </div>
        </div>
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