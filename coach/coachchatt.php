<?php   
    include_once 'connection.php';
    include_once 'session.php';
    include_once 'savechatmessage.php';
    date_default_timezone_set('Europe/Stockholm');
?>

<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Chatt</title>
        <link rel = "stylesheet" href = "assets/main.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <script src="main.js"></script>

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

<a id = "Tillbaka" href="">Tillbaka</a>
<div id= "welcome">
           
            <h1><?php echo $_SESSION['User']; ?>!</h1>
            <br>
        </div>

        <div id="chatcontainer">

        <div id="chatbox">

            <?php
                // hämtar namn och kommentar från databasen
                $getdata = "SELECT from_id, message, submitted, datum FROM Chatt";

                // sparar resultatet av queryn i en variabel
                $result = $connection->query($getdata);

                $userimg = '<img id ="userchatt" src="https://image.ibb.co/edWLgJ/default_user_image.png" alt="default_user_image">';

                while($row = mysqli_fetch_assoc($result))
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

            <textarea placeholder="Vänligen skriv ditt meddelande här" name="coachmsg" id="coachmsg"></textarea><br>
            <input type="submit" name="submitmsg" value="SVARA" id="sendmessage">

            </form>

        </div>
            <a href=''>
            <input type="submit" name="closeForumKnapp" value="LÄMNA FORUM" id="closeForumKnapp" onsubmit="">
            </a>
    </body>

</html>

