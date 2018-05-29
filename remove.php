<?php
include_once "session.php";
include_once "connection.php";

    $clientID = $_SESSION['ID'];
    $delete = "DELETE FROM u WHERE userID = '".$clientID."'";
    $connection->query($delete);
    header ("Location: index.php");
?>