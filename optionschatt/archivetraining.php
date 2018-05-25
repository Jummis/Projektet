<?php
include_once "../connection.php";
include_once "../session.php";
date_default_timezone_set('Europe/Stockholm');

        $training = "training";
        $ID = $_SESSION['ID'];

        $sqlinsert = "INSERT INTO Archive_Message_Client (clientMsgID, clientID, submitted, datum, message_client, forum_type, coachMsgID) 
        SELECT * FROM Client_Message WHERE clientID = '$ID' AND forum_type = '$training'";
        $sqlresult = $connection->query($sqlinsert);
        
        $sqldelete = "DELETE FROM Client_Message WHERE clientID = '$ID' AND forum_type = '$training'";
        $sqlresult = $connection->query($sqldelete);

        header("Location: ../userHome.php");
?>