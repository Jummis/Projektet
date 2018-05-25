<?php
include_once '../connection.php';
include_once 'sessioncoach.php';

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {

        $passwordErr="";

        $oldpassword = $connection->real_escape_string($_POST['currentPassword']);
        $newpassword = $connection->real_escape_string($_POST['newPassword']);
        $repnewpasssword = $connection->real_escape_string($_POST['confirmPassword']); 

        //Hämtar saltet från db
        $getsalt = "SELECT salt FROM Coach WHERE coachId=3";
        $resgetsalt = $connection->query($getsalt); 

        //saltar och hashar det angivna lösenordet
        $Oldpassword = sha1($resgetsalt . $oldpassword);

        //Hämtar lösenordet från db
        $getoldpassword = "SELECT password FROM Coach WHERE coachID=3";
        $oldpassworddb = $connection->query($getoldpassword); 
        
        if (empty($oldpassword) OR empty($newpassword) OR empty($repnewpassword)) {
        $passwordErr = "Du måste fylla i alla fält!";
        } 

        //Om det angivna lösenordet och lösenordet i db matchar
        if($Oldpassword==$oldpassworddb){
            //Om det nya lösenordet och det repeterade lösenordet matchar
            if($newpassword==$repnewpasssword){
                //Updatera lösenordet i db
                $passchange= "UPDATE Coach SET password='$newpassword' WHERE coachID=3";
                $updatePassword=$connection->query($passchange);
            }
            else $passwordErr="lösenorden matchar inte!"; 
        }
        else $passwordErr="felaktigt lösenord"; 
    }
?>