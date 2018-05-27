<?php
include_once '../connection.php';
include_once 'sessioncoach.php';

$passwordErr="";

    if ($_SERVER["REQUEST_METHOD"] == 'POST') {

        $oldpassword = $connection->real_escape_string($_POST['currentPassword']);
        $newpassword = $connection->real_escape_string($_POST['newPassword']);
        $repnewpasssword = $connection->real_escape_string($_POST['confirmPassword']); 

        //Hämtar saltet från db
        $getsalt = "SELECT salt FROM Coach WHERE coachId=3";
        $resgetsalt = $connection->query($getsalt); 

        while ($row = $resgetsalt-> fetch_row()){
                $resultsalt = $row[0];
                }

        //saltar och hashar det angivna lösenordet
        $Oldpassword = sha1($resultsalt . $oldpassword);

        

        //Hämtar lösenordet från db
        $getoldpassword = "SELECT password FROM Coach WHERE coachID=1";
        $oldpassworddb = $connection->query($getoldpassword); 
        
        if (empty($oldpassword) || empty($newpassword) || empty($repnewpassword)) {
        $passwordErr = "Du måste fylla i alla fält!";
        } 
        else {
            //Om det angivna lösenordet och lösenordet i db matchar
            if($Oldpassword==$oldpassworddb){
            //Om det nya lösenordet och det repeterade lösenordet matchar
            if($newpassword==$repnewpasssword){
                //Updatera lösenordet i db
                $passchange= "UPDATE Coach SET password='$newpassword' WHERE coachID=1";
                $updatePassword=$connection->query($passchange);
            }
            else $passwordErr="lösenorden matchar inte!"; 
        }
        else $passwordErr="felaktigt lösenord"; 

        }
        
    }
?>