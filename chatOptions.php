<?php
    include 'session.php';
    include_once 'forumtype-process.php';
?>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Hälsocoachen Chatt</title>
        <link rel = "stylesheet" href = "assets/main.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>

    <body>
    <header>
        <ul>
            <a id = "Logga" href="index.php">HÄLSOCOACHEN</a>
            <li><a href="myPage.php">MINA SIDOR</a></li>
            <li><a href="chatOptions.php" class="active">LIVEFORUM</a></li>
            <li><a href="logout.php">LOGGA UT</a></li>
        </ul>
    </header>

        <div id= "welcome">
            <h1> Vad vill du ha hjälp med idag? </h1>
            <p1> Vänligen välj ett av nedanstående alternativ.</p1><br><br><br>
        </div>

        <form name="chat" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <div class="optionButtons">
                <input type="submit" class="button" name = "food" value="KOST"><br>
                <input type="submit" class="button" name = "training" value="TRÄNING"><br>
                <input type="submit" class="button" name = "stress" value="STRESS"><br>
                <input type="submit" class="button" name = "sleep" value="SÖMN"><br>
                <input type="submit" class="button" name = "alcohol" value="ALKOHOL/TOBAK"><br>
                <input type="submit" class="button" name = "general" value="ALLMÄNT"><br>
           </div>
        </form>
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