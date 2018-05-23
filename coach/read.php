<?php   
    include_once '../connection.php';
    include_once '../session.php';
    date_default_timezone_set('Europe/Stockholm');
?>

<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Chatt</title>
        <link rel = "stylesheet" href = "assets/maincoach.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    </head>

    <body>
<header>
 <ul>

  <a id = "Logga" href="index.php">HÄLSOCOACHEN</a>
    <li><a href="myPage.php">MINA SIDOR</a></li>
  <li><a href="chatOptions.php" class="active">LIVEFORUM</a></li>
  <li><a href="logout.php">LOGGA UT</a></li>
  <li><a href="">Något mer</a></li>
  
  
</ul>
</header>

<a id = "Tillbaka" href="coachMyPage.php">Tillbaka</a>
<div id= "welcome">
           
            <h1>Hej Coach <?php echo $_SESSION['User']; ?>!</h1>
            <br>
        </div>

        <div id="chatcontainer2">

        <form name="chat" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

            <input type = "text" placeholder = "AnvändarID" id = "inputBox" name = "userID">
            <input type="submit" name="submitmsg" value="LÄS" id="sendmessage">

            </form>

        <div id="sendbox">

            <?php
                if ($_SERVER["REQUEST_METHOD"] == 'POST')
                {
                    $userID = $connection->real_escape_string($_POST['userID']);

                // hämtar allt från databasen på både svarade och osvarade meddelanden        
                $answered = "SELECT * FROM Chatt WHERE from_id = '$userID' OR from_coach IS NOT NULL";
                $notanswered = "SELECT * FROM Chatt WHERE from_id = '$userID' OR from_coach IS NULL";

                // sparar resultatet av queryn i en variabel
                $a = $connection->query($answered);
                $na = $connection->query($notanswered);
                

                $userimg = '<img id ="userchatt" src="https://image.ibb.co/edWLgJ/default_user_image.png" alt="default_user_image">';
                $coachimg = '<img id ="userchatt" src="../assets/img/u_img_yellow.png">';

                   while($row = mysqli_fetch_assoc($a))
                    {  
                            
                            echo "<p5>" . $row["datum"] ."</p5>";
                            echo "<h5>" . $userimg . " " . $row["name"]."</h5>";  
                            echo "<p6>" . $row["message"] ."</p6>"."<br>"."<br>"; 
                            if ($row["from_coach"] == NULL) {
                                echo "<a href = ''> Obesvarat meddelande </a><br>";
                                echo "<a href = svara.php> Svara nu </a><br>";
                                return $row ["chattID"];
                            }
                            echo "<p4>" . $row["submitted"] . "</p4>"."<br><hr>";
                            if ($row["from_coach"] != NULL) {
                                echo "<p5>" . $row["datum"] ."</p5>";
                                echo "<h5>" . $coachimg . " " . $row["from_coach"]." (Coach)</h5>";
                                echo "<p6>" . $row["coach_message"] ."</p6>"."<br>"."<br>";
                                echo "<p4>" . $row["submitted"] . "</p4>"."<br>";
                                echo "<hr>";    
                            }         
                                                              
                    }
    
                }

                
            ?>

        </div>
            <form name="chat" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">    

            <input type = "text" placeholder = "Ange meddelande ID du svarar på" id = "inputBox2" name = "number"><br>

            <textarea placeholder="Vänligen skriv ditt meddelande här" name="coachmsg" id="coachmsg"></textarea><br>
            <input type="submit" name="submitmsg" value="SVARA" id="sendmessage">

            </form>

            

        </div>
    </body>

</html>
