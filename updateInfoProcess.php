<?php
include_once "session.php";
include_once "connection.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $clientID = $_SESSION['ID'];

        $newfName = mysqli_real_escape_string($connection, $_POST['newfName']);
        $newlName = mysqli_real_escape_string($connection, $_POST['newlName']);
        $newEmail = mysqli_real_escape_string($connection, $_POST['newEmail']);

            if (!empty($newfName))
            {
                $updatefName = "UPDATE u SET fname = '$newfName' WHERE userID = '".$clientID."'";
                $resultNewfName = $connection->query($updatefName);
            }

            if (!empty($newlName))
            {
                $updatelName = "UPDATE u SET lname = '$newlName' WHERE userID = '".$clientID."'";
                $resultNewlName = $connection->query($updatelName);
            }

            if (!empty($newEmail))
            {
                $updateEmail = "UPDATE u SET email = '$newEmail' WHERE userID = '".$clientID."'";
                $resultNewEmail = $connection->query($updateEmail);
            }

                if ($resultNewfName || $resultNewlName || $resultNewEmail)
                {
                    header("Location: myProfile.php");
                }

                else
                {
                    echo "<p>Något gick fel</p>";
                }

    }

?>