<?php
include_once '../connection.php';
include_once 'sessioncoach.php';

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {

        $oldpassword = $connection->real_escape_string($_POST['currentPassword']);
        $newpassword = $connection->real_escape_string($_POST['newPassword']);
        $repnewpasssword = $connection->real_escape_string($_POST['confirmPassword']); 

        $getsalt = "SELECT salt FROM Coach WHERE email = '$Email'";
        $resgetsalt = $connection->query($getsalt); 

        while ($row = $resgetsalt->fetch_row()){
            $Salt = $row[0];
        }

        $hash = sha1($Salt . $oldpassword);

        $getoldpassword = "SELECT password FROM Coach WHERE coachID=";
        $resgetpw = $connection->query($getoldpassword); 
        $oldpassworddb =$resgetpw['password'];

        if($oldpassword==$oldpassworddb){

            if($newpassword==$repnewpasssword){
                $passchange= "UPDATE Coach SET password='$newpassword' WHERE email='$Email'";
            }
            else $passwordErr="lösenorden matchar inte!"; 
        }
        else $passwordErr="felaktigt lösenord"; 

        if (empty($oldpassword) OR empty($newpassword) OR empty($repnewpassword)) {
        $password_error = "Du måste fylla i alla fält!";
        } 


    }
?>