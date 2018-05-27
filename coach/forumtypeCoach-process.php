<?php
include '../../connection.php';


    //skicka med forum_type till en php funktion som använder den för att anpassa sidan?
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['training'])){ 
            $forum_type = "training";
            header ("Location: optionschatt/training.php");
        }

        if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['food'])) {
            $forum_type = "food";
            header ("Location: optionschatt/kost.php");
        }

        if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['sleep'])) {
            $forum_type = "sleep";
            header ("Location: optionschatt/sleep.php");
        }
 
        if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['alcohol'])) {
            $forum_type = "alcohol";
            header ("Location: optionschatt/alcohol.php");
        }

        if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['stress'])) {
            $forum_type = "stress";
            header ("Location: optionschatt/stress.php");
        }

        if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['general'])) {
            $forum_type = "general";
            header ("Location: optionschatt/general.php");
        }

        /* $insertmessage = "INSERT INTO Client_Message(forum_type, clientID) VALUES ('".$forum_type."', '".$_SESSION['ID']."');";
        $connection->query($insertmessage);
        header ("Location: chatt.php"); */
    }
?>