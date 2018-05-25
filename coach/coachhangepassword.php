<?php
include_once '../connection.php';
include_once 'sessioncoach.php';

function unique_salt() {
    return substr(sha1(mt_rand()),0,22);
}


    if ($_SERVER["REQUEST_METHOD"] == 'POST') {

        $passwordErr="";

        $oldpassword = $connection->real_escape_string($_POST['currentPassword']);
        $newpassword = $connection->real_escape_string($_POST['newPassword']);
        $repnewpasssword = $connection->real_escape_string($_POST['confirmPassword']); 

        $getsalt = "SELECT salt FROM Coach WHERE coachId=3";
        $resgetsalt = $connection->query($getsalt); 

        $Oldpassword = sha1($resgetsalt . $oldpassword);

        $getoldpassword = "SELECT password FROM Coach WHERE coachID=3";
        $oldpassworddb = $connection->query($getoldpassword); 
        
        if (empty($oldpassword) OR empty($newpassword) OR empty($repnewpassword)) {
        $passwordErr = "Du måste fylla i alla fält!";
        } 

        if($Oldpassword==$oldpassworddb){

            if($newpassword==$repnewpasssword){
                $passchange= "UPDATE Coach SET password='$newpassword' WHERE coachID=3";
                $updatePassword=$connection->query($passchange);
            }
            else $passwordErr="lösenorden matchar inte!"; 
        }
        else $passwordErr="felaktigt lösenord"; 
    }
?>