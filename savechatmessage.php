<?php

include_once 'session.php';

$uname = "dbtrain_763";
$pass = "yvgjnd";
$host = "dbtrain.im.uu.se";
$dbname = "dbtrain_763";

$connection=new mysqli($host,$uname,$pass,$dbname);

if ($connection->connect_error)
    {
    die ("Connection failed : ".$connection.connect_error);
    }

 if ($_SERVER["REQUEST_METHOD"] == 'POST'){
        //$uID = $connect->($_SESSION['User']);
        $message = $connect->real_escape_string($_POST['usermsg']);

      $insertmessage = "INSERT INTO chatt(submitted, from_id, message) VALUES (CURRENT_TIMESTAMP, '$_SESSION['User'] ', '$message');";
      $connect->query($insertmessage); 
 }

?>