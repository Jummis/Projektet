<?php   
    include_once 'connection.php';
    include_once 'session.php';
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
                <a id = "Logga" href="userHome.php">HÄLSOCOACHEN</a>
                <li><a href="myPage.php" class="active">MINA SIDOR</a></li>
                <li><a href="chatOptions.php">LIVEFORUM</a></li>
                <li><a href="logout.php">LOGGA UT</a></li>  
                <li><a href=""> </a></li>
                <li><a href=""> </a></li>
            </div>
            </ul>
        </header>

        <div id = "wrapper4">
        <div id= "wrapperfiles">
            <h1> Mina filer</h1>
            <p1> Här kan du se de filer som din coach lagt upp för dig. </p1><br><br>

            <div id = "fileContainer">
                <a href="http://gfit.se/downloads/12-veckors-traningsprogram.pdf"><img id=pdfIcon src="https://www.bitcodesoft.com/wp-content/uploads/2018/03/8-pdf.png"<br></a>
                <a href="http://gfit.se/downloads/12-veckors-traningsprogram.pdf"><img id=pdfIcon src="https://www.bitcodesoft.com/wp-content/uploads/2018/03/8-pdf.png"<br></a>
            </div>
        </div>
   
        <div class="leftmenu">
            <a class = "veryactive">MINA SIDOR</a>
            <a href="files.php" class="active">FILER</a>
            <a href="myProfile.php" >MIN PROFIL</a>
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
        <p8>Hälsocochen Sjukvård<br> Hälsocoachen Psykolog</p8>
    </footer>
</html>