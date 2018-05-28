<?php   
include_once 'connection.php';
include_once 'session.php';
include_once 'showPersInfo.php';
?>

<html>
    <head>
        <title> Hälsocoachen - homepage </title>
        <link rel = "stylesheet" href = "assets/main.css">
    </head>

    <body>
        <header>
            <ul>
            <div id "logoAll">
                <img id = "holdingHands" src = "assets/img/hands-holding-heart.png">
                <a id = "Logga" href="../userHome.php">HÄLSOCOACHEN</a>
                <li><a href="myPage.php" class="active">MINA SIDOR</a></li>
                <li><a href="chatOptions.php">LIVEFORUM</a></li>
                <li><a href="logout.php">LOGGA UT</a></li>  
                <li><a href=""> </a></li>
                <li><a href=""> </a></li>
            </div>
            </ul>
        </header>

    <div id ="wrapper4">
        <div id= "wrapperMyProfile">
            <h1> Hej <?php echo $_SESSION['User']; ?> </h1>
            <p1> Detta är din profil. Här kan du fylla i och uppdatera dina värden. </p1><br><br>
        

            <p7>Förnamn<br></p7><?php echo $fname; ?><br><br>
            <p7>Efternamn<br></p7><?php echo $lname; ?><br><br>
            <p7>Personnummer<br></p7> <?php echo $pNr; ?><br><br>
            <p7>Epostadress<br></p7> <?php echo $email; ?><br><br>

            <div id ="profileButton">
            <a href='updateInfo.php'><input type="submit" id ="updateButton" name="updateButton" value="Uppdatera information" onsubmit="updateInfo.php"></a>
            </div>
        </div>

    

        <div class="leftmenu">
            <a class = "veryactive">MINA SIDOR</a>
            <a href="files.php">FILER</a>
            <a href="myProfile.php" class="active">MIN PROFIL</a>
            <a href="loggbok.php">LOGGBOK</a>
            <a href="historik/historik.php">HISTORIK</a>
        </div>  
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
        </div> 
    </footer>
</html>
