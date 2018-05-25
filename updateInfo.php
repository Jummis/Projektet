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
                <a id = "Logga" href="index.php">HÄLSOCOACHEN</a>
                <li><a href="myPage.php" class="active">MINA SIDOR</a></li>
                <li><a href="chatOptions.php">LIVEFORUM</a></li>
                <li><a href="logout.php">LOGGA UT</a></li> 
            </ul>
        </header>


        <div id= "wrapper2">
            <h1> Hej <?php echo $_SESSION['User']; ?> </h1>
            <p1> Här kan du fylla i och uppdatera dina uppgifter. </p1><br><br>
        </div>

        <form action = "updateInfoProcess.php" method = "POST">
        <div id="personligaUppg">
            <p7>Förnamn<br></p7><input type="text" id = "newfName" name="newfName" value="<?php echo $fname; ?>"><br><br>
            <p7>Efternamn<br></p7><input type="text" id = "newfName" name="newlName" value="<?php echo $lname; ?>"><br><br>
            <p7>Personnummer<br></p7><?php echo $pNr; ?><br><br>
            <p7>Epostadress<br></p7><input type="text" id = "newfName" name="newEmail" value="<?php echo $email; ?>"><br><br>

            <div id ="profileButtonSave">
            <a href='updateInfo.php'><input type="submit" id ="updateButton" name="saveButton" value="Spara" onsubmit="updateInfo.php"></a>
            </div>
        </form>

    </div>

        <div class="leftmenu">
            <a class = "veryactive">MINA SIDOR</a>
            <a href="files.php">FILER</a>
            <a href="myProfile.php" class="active">MIN PROFIL</a>
            <a href="loggbok.php">LOGGBOK</a>
            <a href="historik.php">HISTORIK</a>
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
