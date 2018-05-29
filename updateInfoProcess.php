<?php
    include_once "session.php";
    include_once "connection.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $clientID = $_SESSION['ID'];
        $updateready = "";

        $newfName = mysqli_real_escape_string($connection, $_POST['newfName']);
        $newlName = mysqli_real_escape_string($connection, $_POST['newlName']);
        $newEmail = mysqli_real_escape_string($connection, $_POST['newEmail']);

        $oldpassword = mysqli_real_escape_string($connection, $_POST['currentPassword']);
        $newpassword = mysqli_real_escape_string($connection, $_POST['newPassword']);
        $repnewpasssword = mysqli_real_escape_string($connection, $_POST['confirmPassword']); 

            if (!empty($newfName)){
                $updatefName = "UPDATE u SET fname = '$newfName' WHERE userID = '".$clientID."'";
                $resultNewfName = $connection->query($updatefName);
                $updateready = "ename";
            }

            if (!empty($newlName)){
                $updatelName = "UPDATE u SET lname = '$newlName' WHERE userID = '".$clientID."'";
                $resultNewlName = $connection->query($updatelName);
                $updateready = "lname";
            }

            if (!empty($newEmail)){
                $updateEmail = "UPDATE u SET email = '$newEmail' WHERE userID = '".$clientID."'";
                $resultNewEmail = $connection->query($updateEmail);
                $updateready = "email";
            }

            if (!empty($oldpassword && $newpassword && $repnewpasssword)){   
                $getsalt = "SELECT salt FROM u WHERE userID = '".$clientID."'";
                $resgetsalt = $connection->query($getsalt); 

                while ($row = $resgetsalt-> fetch_row()){
                    $resultsalt = $row[0];
                }

                $Oldpassword = sha1($resultsalt . $oldpassword);

                $getoldpassword = "SELECT password FROM u WHERE userID = '".$clientID."'";
                $oldpassworddb = $connection->query($getoldpassword);

                while ($row = $oldpassworddb-> fetch_row()){
                    $resultpassword = $row[0];
                }

                if($Oldpassword==$resultpassword){

                //Om det nya lösenordet och det repeterade lösenordet matchar
                    if($newpassword==$repnewpasssword){
                        //Updatera lösenordet i db
                        $new = sha1($resultsalt . $newpassword);
                        $passchange= "UPDATE u SET password='$new' WHERE userID= '".$clientID."'";
                        $updatePassword=$connection->query($passchange);
                        $updateready = "password";
                        
                    }
                    else {
                    $passwordErr="lösenorden matchar inte!";  
                    }
                }
                else {
                        $passwordErr="felaktigt lösenord"; 
                }
            }

            if ($updateready != ""){
                    header ("Location: MyProfile.php");
                }

                else{
                    echo "<p>Något gick fel</p>";
                }
        }     
?>