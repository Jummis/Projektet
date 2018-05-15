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
<div id = "header">
<img id = "headerIMG" src="https://preview.ibb.co/kgnb5d/HEADERBILD.jpg">
 <ul>
  <li><a href="default.asp">MINA SIDOR</a></li>
  <li><a href="chatOptions.php">CHATT</a></li>
  <li><a href="logout.php">LOGGA UT</a></li>
</ul> 
</div>

<div id= "welcome">
<h1> Hej <?php echo $_SESSION['User']; ?> </h1>
<p1> Hur kan vi hjälpa dig idag?<br>
     Tryck på chatta och berätta för oss vad<br>
     vi kan göra för dig. </p1>
<br><br>
<a href='chatOptions.php'><input type="submit" id=chattbutton name=chattbutton value=CHATTA></a>
</div>

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

</div>

</body>
</html>