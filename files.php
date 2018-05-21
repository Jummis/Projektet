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

  <a id = "Logga" href="index.php">HÄLSOCOACHEN</a>
   <li><a href="myPage.php" class="active">MINA SIDOR</a></li>
  <li><a href="chatOptions.php">LIVEFORUM</a></li>
  <li><a href="logout.php">LOGGA UT</a></li>
  
</ul>
</header>
     

        <div id= "wrapper2">
        <h1> Hej <?php echo $_SESSION['User']; ?> </h1>
        <p1> Detta är dina filer. Här kan du se de filer som din coach lagt upp för dig. </p1>
        <br><br>

        <div id = "fileContainer">
        <a href="http://gfit.se/downloads/12-veckors-traningsprogram.pdf"><img id=pdfIcon src="https://www.bitcodesoft.com/wp-content/uploads/2018/03/8-pdf.png"<br></a>
        <a href="http://gfit.se/downloads/12-veckors-traningsprogram.pdf"><img id=pdfIcon src="https://www.bitcodesoft.com/wp-content/uploads/2018/03/8-pdf.png"<br></a>
        </div>
        </div>

        
        <div class="leftmenu">
        <a class = "veryactive">MINA SIDOR</a>
        <a href="files.php" class="active">FILER</a>
        <a href="myProfile.php" >MIN PROFIL</a>
        <a href="#">LOGGBOK</a>
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