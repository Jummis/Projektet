<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
        if(!isset($_SESSION['User']) && !isset($_SESSION['ID'])) {
            header("Location: login.php");
        }
    }
?>