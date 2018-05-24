<?php
include 'connection.php';

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['training'])){ 
            $forum_type = "training";
        }

        if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['food'])) {
            $forum_type = "food";
        }

        if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['sleep'])) {
            $forum_type = "sleep";
        }
 
        if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['alcohol'])) {
            $forum_type = "alcohol";
        }

        if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['stress'])) {
            $forum_type = "stress";
        }

        if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['general'])) {
            $forum_type = "general";
        }

        $insertmessage = "INSERT INTO Client_Message(forum_type, clientID) VALUES ('".$forum_type."', '".$_SESSION['ID']."');";
        $connection->query($insertmessage);
        header ("Location: chatt.php");
    }
?>