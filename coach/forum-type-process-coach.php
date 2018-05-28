<?php
include '../connection.php';

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['training'])){ 
            header ("Location: C_options/C_training.php");
        }

        if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['food'])) {
            header ("Location: C_options/C_food.php");
        }

        if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['sleep'])) {
            header ("Location: C_options/C_sleep.php");
        }
 
        if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['alcohol'])) {
            header ("Location: C_options/C_alcohol.php");
        }

        if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['stress'])) {
            header ("Location: C_options/C_stress.php");
        }

        if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['general'])) {
            header ("Location: C_options/C_general.php");
        }

    }
?>