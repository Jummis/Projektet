<?php   
    include_once 'connection.php';
    include 'session.php';
    include_once 'savechatmessage.php';
    date_default_timezone_set('Europe/Stockholm');
?>

<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Hälsocoachen Chatt</title>
        <link rel = "stylesheet" href = "assets/main.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <script src="assets/js/main.js"></script>

    </head>

    <body>
<header>
 <ul>

  <a id = "Logga" href="index.php">HÄLSOCOACHEN</a>
    <li><a href="myPage.php">MINA SIDOR</a></li>
  <li><a href="chatOptions.php" class="active">LIVEFORUM</a></li>
  <li><a href="logout.php">LOGGA UT</a></li>
  
  
</ul>
</header>

<a id = "Tillbaka" href="chatOptions.php">Tillbaka till alternativen</a>
<div id= "welcome">
           
            <h1> Välkommen till ditt liveforum <?php echo $_SESSION['User']; ?>!</h1>
            <p1> Skicka ett meddelande så kommer någon av<br>
                  våra hälsocoacher snart att svara dig. </p1>
            <br>
        </div>

        <div id="chatcontainer">
        <p3> Dina obersvarade meddelanden</p3> <br>     <p3>Besvarade meddelanden </p3>
        

        <div id="chatbox">

            <?php

                $name = $_SESSION['User'];
                // hämtar allt från databasen på både svarade och osvarade meddelanden        
                $notanswered = "SELECT * FROM Chatt WHERE from_id = '$name'";
                $answered = "SELECT * FROM Chatt WHERE from_id = '$name' AND from_coach IS NOT NULL";

                // sparar resultatet av queryn i en variabel
                $a = $connection->query($answered);
                $na = $connection->query($notanswered);
                

                $userimg = '<img id ="userchatt" src="https://image.ibb.co/edWLgJ/default_user_image.png" alt="default_user_image">';
                $coachimg = '<img id ="userchatt" src="assets/img/u_img_yellow.png">';

                /*if ('from_id' == NULL)
                {
                    while($row = mysqli_fetch_assoc($resultCoach))
                    {
                        echo "<p5>" . $row["datum"] ."</p5>";
                        echo "<h5>" . $coachimg . " " . $row["coach_id"]."</h5>";
                        echo "<p6>" . $row["coach_message"] ."</p6>"."<br>"."<br>";
                        echo "<p4>" . $row["submitted"] . "</p4>"."<br>";
                        echo "<hr>";
                    }
                }
                else
                {*/
                    while($row = mysqli_fetch_assoc($a))
                    {  
                            echo "<p5>" . $row["datum"] ."</p5>";
                            echo "<h5>" . $userimg . " " . $row["from_id"]."</h5>";  
                             echo "<p6>" . $row["message"] ."</p6>"."<br>"."<br><hr>"; 
                            echo "<h5>" . $coachimg . " " . $row["from_coach"]." (Coach)</h5>";
                            echo "<p6>" . $row["coach_message"] ."</p6>"."<br>"."<br>";
                            echo "<p4>" . $row["submitted"] . "</p4>"."<br>";
                            echo "<hr>";                  
                    }

                    while($row = mysqli_fetch_assoc($na))
                    {  
                            echo "<p5>" . $row["datum"] ."</p5>";
                            echo "<h5>" . $userimg . " " . $row["from_id"]."</h5>";  
                             echo "<p6>" . $row["message"] ."</p6>"."<br>"."<br>"; 
                            echo "<p4>" . $row["submitted"] . "</p4>"."<br>";
                            echo "<hr>";                  
                    }    
            ?>

        </div>
            <form name="chat" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

            <textarea placeholder="Vänligen skriv ditt meddelande här" name="usermsg" id="usermsg"></textarea><br>
            <input type="submit" name="submitmsg" value="SKICKA" id="sendmessage">

            </form>

        </div>
            <a href='userHome.php'>
            <input type="submit" name="closeForumKnapp" value="LÄMNA FORUM" id="closeForumKnapp" onsubmit="userHome.php">
            </a>
    </body>
    <footer>
<p id="kontaktrubrik">HÄLSOCOACHEN</p>
<p id="kontaktuppg">Kontaktuppgifter</p>


 <div class="row">
  <div class="column">
    <img src="https://image.ibb.co/bUdviy/phone_call_1.png"><br><br>
    <p3> 0703457947 </p3>
  </div>
  <div class="column">
    <img src="https://image.ibb.co/jSQmqd/envelope.png"><br><br>
    <p3> halsocoachen@coach.se </p3>
  </div>
</div> 

</footer>
</html>

