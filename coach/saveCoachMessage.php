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
    $date = date("Y/m/d");
    $time = date("h:i");

      $insertmessage = "INSERT INTO Chatt(from_coach, coach_message, submitted, datum) VALUES ('".$_SESSION['User']."', '".$coachmessage."', '".$time."', '".$date."');";
      $connection->query($insertmessage);
 }

?>