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
                <li><a href="myPage.php">MINA SIDOR</a></li>
                <li><a href="chatOptions.php">LIVEFORUM</a></li>
                <li><a href="logout.php">LOGGA UT</a></li>  
                <li><a href=""> </a></li>
                <li><a href=""> </a></li>
              </div>
            </ul>
        </header>

      <div id= "welcomeUserHome">
        <h1> Hej <?php echo $_SESSION['User']; ?> </h1><br>
        <p1> Hur kan vi hjälpa dig idag?<br><br>
        Gå vidare till liveforumet och berätta<br>
        vad vi kan göra för dig.</p1><br><br><br>
        <a href='chatOptions.php'><input type="submit" id="chattbutton" name=chattbutton value="TILL LIVEFORUM"></a>
      </div>
  </body>
  <footer>
    <p id="kontaktrubrik">HÄLSOCOACHEN</p>
    <p id="kontaktuppg">Kontaktuppgifter</p>

    <div class="row">
      <div class="column">
        <img src="https://image.ibb.co/bUdviy/phone_call_1.png"><br>
        <p3> 0703457947 </p3>
      </div>
      <div class="column">
        <img src="https://image.ibb.co/jSQmqd/envelope.png"><br>
        <p3> halsocoachen@coach.se </p3>
      </div>
    </div> 
    <p8>Hälsocochen Sjukvård<br> Hälsocoachen Psykolog</p8>
  </footer>
</html>