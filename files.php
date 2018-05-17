<?php   
    include_once 'connection.php';
    include_once 'session.php';
?>

<html>
    <head>
        <title> Hälsocoachen - homepage </title>
        <link rel = "stylesheet" href = "main.css">
    </head>

    <body>
        <header>
        <div id = "header">
        <ul>
        <a href="index.php"><img id="rubrik" src="https://preview.ibb.co/hAiy5d/logo.jpg"></a>
        <li><a href="myPage.php">MINA SIDOR</a></li>
        <li><a href="chatOptions.php">CHATT</a></li>
        <li><a href="logout.php">LOGGA UT</a></li>
        </ul>
    </div>
    </header>

        <div id= "welcome">
        <h1> Hej <?php echo $_SESSION['User']; ?> </h1>
        <p1> Detta är dina filer. Här kan du se de filer som din coach lagt upp för dig. </p1>
        <br><br>

        <div id=fileContainer>
        <a href="http://gfit.se/downloads/12-veckors-traningsprogram.pdf"><img id=pdfIcon src="https://www.bitcodesoft.com/wp-content/uploads/2018/03/8-pdf.png"<br></a>
        <a href="http://gfit.se/downloads/12-veckors-traningsprogram.pdf"><img id=pdfIcon src="https://www.bitcodesoft.com/wp-content/uploads/2018/03/8-pdf.png"<br></a>
        </div>


        <nav class="leftmenu">
        <a href="myPage.php">MINA SIDOR</a>
        <a href="files.php" class="active">FILER</a>
        <a href="myProfile.php" >MIN PROFIL</a>
        <a href="#">LOGGBOK</a>
        <a href="#">HISTORIK</a>
        </nav>

        <div id="bottom">
            <p id="kontaktrubrik">HÄLSOCOACHEN</p>
            <p id="kontaktuppg">Kontaktuppgifter</p>
        <div class="row">
        <div class="column">
        <img src="https://image.ibb.co/bUdviy/phone_call_1.png"><br>
        <p2> 0703457947 </p2>
        </div>
        <div class="column">
        <img src="https://image.ibb.co/jSQmqd/envelope.png"><br>
        <p3> halsocoachen@coach.se </p3>
        </div>
        </div> 

    </body>
</html>