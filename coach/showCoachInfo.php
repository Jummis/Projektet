<?php
include_once "../connection.php";
include_once "sessioncoach.php";

    $coachID = $_SESSION['CoachID'];

    $getPersInfo = "SELECT * FROM Coach WHERE coachID = '".$coachID."'";
    $fetchedInfo = $connection->query($getPersInfo);


    while($row = mysqli_fetch_assoc($fetchedInfo))
        {
            $fname = $row["fname"];
            $lname = $row["lname"];
            $email = $row["email"];
            $pNr = $row["pNr"];
        }
?>