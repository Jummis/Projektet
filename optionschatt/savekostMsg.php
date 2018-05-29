<?php
include_once "../connection.php";
include_once "../session.php";
date_default_timezone_set('Europe/Stockholm');

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $message = $connection->real_escape_string($_POST['userkostmsg']);
        $date = date("Y/m/d");
        $time = date("h:i");

        $ID = $_SESSION['ID'];

        $sql = "SELECT clientMsgID FROM Client_Message WHERE clientID = '$ID' AND message_client IS NULL";
        $sqlresult = $connection->query($sql);

        $kost = "food";

            if(empty(!$sqlresult)){ 
                $insert = "INSERT INTO Client_Message (clientID, submitted, datum, message_client, forum_type) VALUES ('".$ID."', '".$time."', '".$date."', '".$message."', '".$kost."')";
                $resultat = $connection->query($insert);
            } 
            else {
                $insertmessage = "UPDATE Client_Message SET submitted = '$time', datum = '$date', message_client = '$message' WHERE clientID = '$ID' AND message_client IS NULL";
                $connection->query($insertmessage);
            }
       } 
?>