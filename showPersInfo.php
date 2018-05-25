<?php
include_once "connection.php";
include_once "session.php";

    $clientID = $_SESSION['ID'];

    $getPersInfo = "SELECT fname, lname, email, pNr FROM u WHERE userID = '".$clientID."'";
    $fetchedInfo = $connection->query($getPersInfo);

    while($row = mysqli_fetch_assoc($fetchedInfo))
        {
            $fname = $row["fname"];
            $lname = $row["lname"];
            $email = $row["email"];
            $pNr = $row["pNr"];
        }
?>