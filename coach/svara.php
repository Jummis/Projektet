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

<a id = "Tillbaka" href="coachchatt.php">Tillbaka</a>

        <div id="chatcontainer">


           
            <form name="chat" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

            <input type = "text" placeholder = "Meddelande Nr" id = "inputBox" name = "number"><br>
            <textarea placeholder="Vänligen skriv ditt meddelande här" name="coachmsg" id="coachmsg"></textarea><br>
            <input type="submit" name="submitmsg" value="SVARA" id="sendmessage">

            </form>

        </div>
            <a href='coachMypage.php'>
            <input type="submit" name="closeForumKnapp" value="LÄMNA FORUM" id="closeForumKnapp" onsubmit="coachMypage.php">
            </a>
    </body>

</html>





?>