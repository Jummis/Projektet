<?php   
    include_once 'connection.php';
    include_once 'session.php';
    include_once 'history-process.php';
?>

<html>
    <head>
        <title> Hälsocoachen - homepage </title>
        <link rel = "stylesheet" href = "assets/main.css">
    </head>

    <body>
        <header>
            <ul>
                <a id = "Logga" href="index.php">HÄLSOCOACHEN</a>
                <li><a href="myPage.php" class="active">MINA SIDOR</a></li>
                <li><a href="chatOptions.php">LIVEFORUM</a></li>
                <li><a href="logout.php">LOGGA UT</a></li>
            </ul>
        </header>

        <div id= "wrapper2">
            <h1> Hej <?php echo $_SESSION['User']; ?> </h1>
            <p1> Här kan du se din forumhistorik .<br></p1><br><br>
        </div>
    
        <div id="chatcontainer">
            <div id="chatbox">
                <?php
                ?>
            </div>
        </div>

            <div class="leftmenu">
            <a class = "veryactive">MINA SIDOR</a>
            <a href="files.php">FILER</a>
            <a href="myProfile.php">MIN PROFIL</a>
            <a href="#">LOGGBOK</a>
            <a href="historik.php" class="active">HISTORIK</a>
        </div>
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
    </footer>
</html>