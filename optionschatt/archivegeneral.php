<?php
        include_once "../connection.php";
        include_once "../session.php";
        date_default_timezone_set('Europe/Stockholm');

        $general = "general";
        $ID = $_SESSION['ID'];

        //Arkivera hälsoklientens meddelanden
        $sqlinsertarchive = "INSERT INTO Archive_Message_Client (clientMsgID, clientID, submitted, datum, message_client, forum_type, coachMsgID) 
        SELECT * FROM Client_Message WHERE clientID = '$ID' AND forum_type = '$general'";
        $sqlarchive = $connection->query($sqlinsertarchive);

        //tar ut hälsoklientens meddelanden som arkiverades
        $sqlselect = "SELECT * FROM Client_Message WHERE clientID = '$ID' AND forum_type = '$general'";
        $sqlresult = $connection->query($sqlselect);
   
        while($row = mysqli_fetch_assoc($sqlresult)){  
                $answeredCoach = "INSERT INTO Archive_Message_Coach (coachMsgID, coachID, submitted, datum, message_coach, forum_type, clientMsgID)
                SELECT * FROM Coach_Message WHERE clientMsgID = '".$row['clientMsgID']."'";
                $AC = $connection->query($answeredCoach);

                $deleteCoachMsg = "DELETE FROM Coach_Message WHERE clientMsgID = '".$row['clientMsgID']."'";
                $sqlresult = $connection->query($deleteCoachMsg);
        }
        //Ta bort meddelanden
        $sqldelete = "DELETE FROM Client_Message WHERE clientID = '$ID' AND forum_type = '$general'";
        $sqlresult = $connection->query($sqldelete);
        header("Location: ../userHome.php");
?>