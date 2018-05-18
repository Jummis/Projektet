<?php   
    include_once 'connection.php';
    include_once 'session.php';
?>

<html>
<head>
    <title> Hälsocoachen - homepage </title>
    <link rel = "stylesheet" href = "assets/css/main.css">
</head>

<body>
<header>
 <ul>

  <a id = "Logga" href="index.php">HÄLSOCOACHEN</a>
  <li><a href="myPage.php">MINA SIDOR</a></li>
  <li><a href="chatOptions.php">LIVEFORUM</a></li>
  <li><a href="logout.php">LOGGA UT</a></li>
  
  
</ul>
</header>

<div id= "welcome">
<h1> Hej <?php echo $_SESSION['User']; ?> </h1>
<p1> Hur kan vi hjälpa dig idag?<br>
<br>
     Gå vidare till liveforumet och berätta<br>
     vad vi kan göra för dig.</p1>
<br><br><br>
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

</footer>
</html>