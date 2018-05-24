<?php
include_once "../connection.php";
include_once "sessioncoach.php";
date_default_timezone_set('Europe/Stockholm');

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $coachmessage = $connection->real_escape_string($_POST['coachmsg']);
        $number = $connection->real_escape_string($_POST['number']);
        $date = date("Y/m/d");
        $time = date("h:i");
    
        $ID = $_SESSION['CoachID'];
        $insertCoachMessage = "INSERT INTO Coach_Message (coachID, submitted, datum, message_coach, clientMsgID) VALUES ('".$ID."', '".$time."', '".$date."', '".$coachmessage."', '".$number."')";
        $connection->query($insertCoachMessage);

        $selectID = "SELECT coachMsgID FROM Coach_Message WHERE clientMsgID = '$number'";
        $coachMsgID = $connection->query($selectID);

        while ($row = $coachMsgID-> fetch_row()){
            $ID = $row[0];
        }

        $update = "UPDATE Client_Message SET coachMsgID = '$ID' WHERE clientMsgID = '$number'";    
        $connection->query($update);
        header ("Location: coachchatt.php");
    }
?>