<?php
include_once "../connection.php";
include_once "../session.php";
date_default_timezone_set('Europe/Stockholm');

        $kost = "kost";
        $ID = $_SESSION['ID'];

        $sqlinsert = "INSERT INTO Archive_Message (clientID, submitted, datum, message_client, forum_type, coachMsgID) SELECT 
        (clientMsgID, clientID, submitted, datum, message_client, forum_type, coachMsgID) FROM Client_Message WHERE clientID = '$ID' AND forum_type = '$kost'";
        $sqlresult = $connection->query($sqlinsert);
        
        $sqldelete = "DELETE FROM Client_Message WHERE clientID = '$ID' AND forum_type = '$kost'";
        $sqlresult = $connection->query($sqldelete);
?>