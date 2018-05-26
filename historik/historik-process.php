<?php
include '../connection.php';

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {

        if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['training'])){ 
            header("Location: historiktraining.php");
        }

        if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['food'])) {
            header("Location: historikfood.php");
        }

        if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['sleep'])) {
            header("Location: historiksleep.php");
        }
 
        if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['alcohol'])) {
            header("Location: historikalcohol.php");
        }

        if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['stress'])) {
            header("Location: historikstress.php");
        }

        if ($_SERVER["REQUEST_METHOD"] == 'POST' and isset($_POST['general'])) {
            header("Location: historikgeneral.php");
        }
    }
?>