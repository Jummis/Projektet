<?php
    include_once "connection.php";
    include_once "session.php";
    date_default_timezone_set('Europe/Stockholm');

    $loggMess_error = "";
    $datum = date("m/d/y h:i");

    // $_SERVER håller "information" om hemsidan. REQUEST_METHOD
    // returnerar metoden som förfrågas i action

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $loggMess = mysqli_real_escape_string($connection, $_POST['loggMessRuta']);
        $logg_Mess = trim($loggMess);
        if(empty($logg_Mess)){
        $loggMess_error = "Du måste skriva något först!";
        }

        // Session var. är definierad till anv. namn från registreringen
        if($loggMess_error == ""){
            $insertloggMess = "INSERT INTO Loggbok (datum, clientID, logg_mess) VALUES ('".$datum."', '".$_SESSION['ID']."', '".$logg_Mess."');";
            $connection->query($insertloggMess);

            $logg_Mess = "";
            header('Location: loggbok.php');
        }
    }
?>