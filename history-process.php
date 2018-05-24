<?php
include 'connection.php';

            $_SESSION['ID']=$userID
            
            if ($_SERVER["REQUEST_METHOD"] == 'POST') {
                
                if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['training'])){
                    $getclientdata = "SELECT submitted, datum, message_client FROM Client_Message WHERE forum_type=training AND $userID=clientID";
                }
                   if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['food'])){
                    $getclientdata = "SELECT submitted, datum, message_client FROM Client_Message WHERE forum_type=food AND $userID=clientID";
                }
                   if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['stress'])){
                    $getclientdata = "SELECT submitted, datum, message_client FROM Client_Message WHERE forum_type=stress AND $userID=clientID";
                }
                   if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['sleep'])){
                    $getclientdata = "SELECT submitted, datum, message_client FROM Client_Message WHERE forum_type=sleep AND $userID=clientID";
                }
                   if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['alcohol'])){
                    $getclientdata = "SELECT submitted, datum, message_client FROM Client_Message WHERE forum_type=alcohol AND $userID=clientID";
                }
                   if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['general'])){
                    $getclientdata = "SELECT submitted, datum, message_client FROM Client_Message WHERE forum_type=general AND $userID=clientID";
                }

                $_SESSION['User']=$user
                $result = $connection->query($getclientdata);
                while($row = mysqli_fetch_assoc($result))
                {  
                    echo "<p5>" . $row["datum"] ."</p5>";
                    echo "<h5>" . $userimg . " " . $row["$user"]."</h5>";
                    echo "<p6>" . $row["message_client"] ."</p6>"."<br>"."<br>";
                    echo "<p4>" . $row["submitted"] . "</p4>"."<br>";
                    echo "<hr>";
                }
                header ("Location: showHistory.php");
            }
?>