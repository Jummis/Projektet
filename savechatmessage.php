<?php
include_once "connection.php";
include_once "session.php";
date_default_timezone_set('Europe/Stockholm');

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        $message = $connection->real_escape_string($_POST['usermsg']);
        $date = date("Y/m/d");
        $time = date("h:i");

        $ID = $_SESSION['ID'];

        $insertmessage = "UPDATE Client_Message SET submitted = '$time', datum = '$date', message_client = '$message' WHERE clientID = '$ID'";
        $connection->query($insertmessage);
    }
?>