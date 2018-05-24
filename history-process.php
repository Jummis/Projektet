<?php
include 'connection.php';

           $userID= $_SESSION['ID'];
            
            if ($_SERVER["REQUEST_METHOD"] == 'POST') {

                if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['training'])){
                    $getclientdata = "SELECT submitted, datum, message_client FROM Client_Message WHERE forum_type=training AND $userID=clientID";
                    $getcoachdata= "SELECT submitted, datum, message_coach FROM Coach_Message WHERE clientMsgID=$userID AND forum_type=training";
                }
                   if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['food'])){
                    $getclientdata = "SELECT submitted, datum, message_client FROM Client_Message WHERE forum_type=food AND $userID=clientID";
                    $getcoachdata= "SELECT submitted, datum, message_coach FROM Coach_Message WHERE clientMsgID= AND forum_type=food";
                }
                   if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['stress'])){
                    $getclientdata = "SELECT submitted, datum, message_client FROM Client_Message WHERE forum_type=stress AND $userID=clientID";
                    $getcoachdata= "SELECT submitted, datum, message_coach FROM Coach_Message WHERE clientMsgID= AND forum_type=stress";
                }
                   if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['sleep'])){
                    $getclientdata = "SELECT submitted, datum, message_client FROM Client_Message WHERE forum_type=sleep AND $userID=clientID";
                    $getcoachdata= "SELECT submitted, datum, message_coach FROM Coach_Message WHERE clientMsgID= AND forum_type=sleep";
                }
                   if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['alcohol'])){
                    $getclientdata = "SELECT submitted, datum, message_client FROM Client_Message WHERE forum_type=alcohol AND $userID=clientID";
                    $getcoachdata= "SELECT submitted, datum, message_coach FROM Coach_Message WHERE clientMsgID= AND forum_type=alcohol";
                }
                   if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['general'])){
                    $getclientdata = "SELECT submitted, datum, message_client FROM Client_Message WHERE forum_type=general AND $userID=clientID";
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