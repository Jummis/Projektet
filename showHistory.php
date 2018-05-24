<?php   
    include_once 'connection.php';
    include_once 'session.php';
   //include_once 'history-process.php';
?>

<html>
    <head>
        <title> Hälsocoachen - homepage </title>
        <link rel = "stylesheet" href = "assets/main.css">
    </head>

    <body>
        <header>
            <ul>
                <a id = "Logga" href="index.php">HÄLSOCOACHEN</a>
                <li><a href="myPage.php" class="active">MINA SIDOR</a></li>
                <li><a href="chatOptions.php">LIVEFORUM</a></li>
                <li><a href="logout.php">LOGGA UT</a></li>
            </ul>
        </header>

        <div id= "wrapper2">
            <h1> Hej <?php echo $_SESSION['User']; ?> </h1>
            <p1> Här kan du se din forumhistorik .<br></p1><br><br>
        </div>
    
        <div id="chatcontainer">
            <div id="chatbox">
            <?php
            $userID= $_SESSION['ID'];
            
            if ($_SERVER["REQUEST_METHOD"] == 'POST') {

                if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['training'])){
                    $getclientdata = "SELECT submitted, datum, message_client FROM Client_Message WHERE forum_type=training AND clientID='$userID'";
                    $getcoachdata= "SELECT submitted, datum, message_coach FROM Coach_Message WHERE clientMsgID=$userID AND forum_type=training";
                }
                   if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['food'])){
                    $getclientdata = "SELECT submitted, datum, message_client FROM Client_Message WHERE forum_type=food AND clientID='$userID'";
                    $getcoachdata= "SELECT submitted, datum, message_coach FROM Coach_Message WHERE clientMsgID= AND forum_type=food";
                }
                   if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['stress'])){
                    $getclientdata = "SELECT submitted, datum, message_client FROM Client_Message WHERE forum_type=stress AND clientID='$userID'";
                    $getcoachdata= "SELECT submitted, datum, message_coach FROM Coach_Message WHERE clientMsgID= AND forum_type=stress";
                }
                   if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['sleep'])){
                    $getclientdata = "SELECT submitted, datum, message_client FROM Client_Message WHERE forum_type=sleep AND clientID='$userID'";
                    $getcoachdata= "SELECT submitted, datum, message_coach FROM Coach_Message WHERE clientMsgID= AND forum_type=sleep";
                }
                   if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['alcohol'])){
                    $getclientdata = "SELECT submitted, datum, message_client FROM Client_Message WHERE forum_type=alcohol AND clientID='$userID'";
                    $getcoachdata= "SELECT submitted, datum, message_coach FROM Coach_Message WHERE clientMsgID= AND forum_type=alcohol";
                }
                   if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['general'])){
                    $getclientdata = "SELECT submitted, datum, message_client FROM Client_Message WHERE forum_type=general AND clientID='$userID'";
                    $getcoachdata= "SELECT submitted, datum, message_coach FROM Coach_Message WHERE clientMsgID= AND forum_type=general";
                }

                $userimg = '<img id ="userchatt" src="https://image.ibb.co/edWLgJ/default_user_image.png" alt="default_user_image">';
                $coachimg = '<img id ="userchatt" src="assets/img/u_img_yellow.png">';

                $user=$_SESSION['User'];
                $resultclient = $connection->query($getclientdata);
                while($row = mysqli_fetch_assoc($resultclient))
                {  
                    echo "<p5>" . $row["datum"] ."</p5>";
                    echo "<h5>" . $userimg . " " . $row["$user"]."</h5>";
                    echo "<p6>" . $row["message_client"] ."</p6>"."<br>"."<br>";
                    echo "<p4>" . $row["submitted"] . "</p4>"."<br>";
                    echo "<hr>";
                }

                $user=$_SESSION['User'];
                $resultcoach = $connection->query($getcoachdata);
                while($row = mysqli_fetch_assoc($resultcoach))
                {  
                    echo "<p5>" . $row["datum"] ."</p5>";
                    echo "<h5>" . $coachimg . " " . $row["$user"]."</h5>";
                    echo "<p6>" . $row["message_coach"] ."</p6>"."<br>"."<br>";
                    echo "<p4>" . $row["submitted"] . "</p4>"."<br>";
                    echo "<hr>";
                }
                header ("Location: showHistory.php");
            }
                ?>
            </div>
        </div>

            <div class="leftmenu">
            <a class = "veryactive">MINA SIDOR</a>
            <a href="files.php">FILER</a>
            <a href="myProfile.php">MIN PROFIL</a>
            <a href="#">LOGGBOK</a>
            <a href="historik.php" class="active">HISTORIK</a>
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
    </footer>
</html>