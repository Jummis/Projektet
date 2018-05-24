<?php
$uname = "dbtrain_763";
$pass = "yvgjnd";
$host = "dbtrain.im.uu.se";
$dbname = "dbtrain_763";

$connection=new mysqli($host,$uname,$pass,$dbname);

    if ($connection->connect_error){
        die ("Connection failed : ".$connection.connect_error);
    }
?>