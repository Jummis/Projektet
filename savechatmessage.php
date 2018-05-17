<?php
include_once "connection.php";
include_once "session.php";

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
    $message = $connection->real_escape_string($_POST['usermsg']);
    $date = $connection->real_escape_string($_POST[date("Y/m/d")]);
    $time = $connection->real_escape_string($_POST[date("h:i")]);

      $insertmessage = "INSERT INTO Chatt(from_id, message, submitted, datum) VALUES ('".$_SESSION['User']."', '".$message."');";
      $connection->query($insertmessage);
 }

?>