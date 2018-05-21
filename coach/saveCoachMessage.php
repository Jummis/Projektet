<?php
include_once "../connection.php";
include_once "../session.php";
date_default_timezone_set('Europe/Stockholm');

$uname = "dbtrain_763";
$pass = "yvgjnd";
$host = "dbtrain.im.uu.se";
$dbname = "dbtrain_763";

$connection=new mysqli($host,$uname,$pass,$dbname);

if ($connection->connect_error)
    {
    die ("Connection failed : ".$connection.connect_error);
    }

if ($_SERVER["REQUEST_METHOD"] == 'POST')
{
    $coachmessage = $connection->real_escape_string($_POST['coachmsg']);
    $number = $connection->real_escape_string($_POST['number']);
    $date = date("Y/m/d");
    $time = date("h:i");
    
    $user = $_SESSION['User'];
    $insertmessage = "UPDATE Chatt SET coach_message = '$coachmessage', from_coach = '$user' WHERE chattID = '$number'";     
    $connection->query($insertmessage);
    header ("Location: coachchatt.php");
 }

?>