<?php   
    include_once '../connection.php';
    include_once '../session.php';
    include_once 'saveCoachMessage.php';
    date_default_timezone_set('Europe/Stockholm');
?>

<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Chatt</title>
        <link rel = "stylesheet" href = "assets/maincoach.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <script src="assets/main.js"></script>

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

        <div id="chatcontainer">

        <div id="chatbox">

            <?php
                // hämtar namn och kommentar från databasen
                $getClientData = "SELECT from_id, message, submitted, datum FROM Chatt";
                $getCoachData = "SELECT coach_id, coach_message, submitted, datum FROM Chatt";

                // sparar resultatet av queryn i en variabel
                $resultClient = $connection->query($getClientData);
                $resultCoach = $connection->query($getCoachData);

                $userimg = '<img id ="userchatt" src="https://image.ibb.co/edWLgJ/default_user_image.png" alt="default_user_image">';
                $coachimg = '<img id ="userchatt" src="../assets/img/u_img_yellow.png">';

                if ('from_coach' == NULL)
                {
                    while($row = mysqli_fetch_assoc($resultClient))
                    {
                        echo "<p5>" . $row["datum"] ."</p5>";
                        echo "<h5>" . $userimg . " " . $row["from_id"]."</h5>";
                        echo "<p6>" . $row["message"] ."</p6>"."<br>"."<br>";
                        echo "<p4>" . $row["submitted"] . "</p4>"."<br>";
                        echo "<hr>";
                    }
                }
                else
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
        
            ?>

        </div>
            <form name="chat" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

            <textarea placeholder="Vänligen skriv ditt meddelande här" name="coachmsg" id="coachmsg"></textarea><br>
            <input type="submit" name="submitmsg" value="SVARA" id="sendmessage">

            </form>

        </div>
            <a href='coachMypage.php'>
            <input type="submit" name="closeForumKnapp" value="LÄMNA FORUM" id="closeForumKnapp" onsubmit="coachMypage.php">
            </a>
    </body>

</html>

