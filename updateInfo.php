<?php   
    include_once 'connection.php';
    include_once 'session.php';
    include_once 'showPersInfo.php';
    include_once 'updateInfoProcess.php';
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
                <a id = "Logga" href="index.php">HÄLSOCOACHEN</a>
                <li><a href="info.php">VAD ÄR HÄLSOCOACHING?</a></li>
                <li><a href="omoss.php">OM OSS</a></li>
                <li><a href="login.php">LOGGA IN/REGISTRERA</a></li>
                </div>
            </ul>
        </header>

        <div id ="wrapper5">
            <div id= "wrapperupdate">
                <h1> Hej <?php echo $_SESSION['User']; ?> </h1>
                <p1> Här kan du uppdatera din användar-information. </p1><br><br>
                <form action = "updateInfoProcess.php" method = "POST">              
                    <p7>Förnamn<br></p7><input type="text" id = "newfName" name="newfName" value="<?php echo $fname; ?>"><br><br>
                    <p7>Efternamn<br></p7><input type="text" id = "newfName" name="newlName" value="<?php echo $lname; ?>"><br><br>
                    <p7>Personnummer<br></p7><p9><?php echo $pNr; ?></p9><br><br>
                    <p7>E-postadress<br></p7><input type="text" id = "newfName" name="newEmail" value="<?php echo $email; ?>"><br><br>
                    <p7>Nuvarande lösenord<br></p7><input type="password" id = "currentPassword" name="currentPassword"><br><br>
                    <p7>Nytt lösenord<br></p7><input type="password" id = "currentPassword" name="newPassword"><br><br>
                    <p7>Återge ditt nya lösenord<br></p7><input type="password" id = "currentPassword" name="confirmPassword"><br><br>
                    <a href='updateInfo.php'><input type="submit" id ="updateButton" name="saveButton" value="Spara" onsubmit="updateInfo.php"></a><br><br>                 
                    <a href='remove.php'>Ta bort konto</a>  
                </form>
                
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
