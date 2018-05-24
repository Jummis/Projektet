<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
        if(!isset($_SESSION['User'])) {
            header("Location: login.php");
        }
    }
?>