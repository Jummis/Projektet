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
 <ul>
  <a href="index.php"><img id="rubrik" src="https://preview.ibb.co/hAiy5d/logo.jpg"></a>
  <li><a href="myPage.php">MINA SIDOR</a></li>
            <li><a href="chatOptions.php">CHATT</a></li>
            <li><a href="logout.php">LOGGA UT</a></li>
  
</ul>
</div>

<div id= "welcome">
<h1> Hej <?php echo $_SESSION['User']; ?> </h1>
<p1> Välkommen till dina sidor. Här kan du se 
     dina filer, följa din utveckling och 
     fylla i din privata loggbok. </p1>
<br><br>


<div class="leftmenu">
  <a href="myPage.php" class="active">MINA SIDOR</a>
  <a href="#">FILER</a>
  <a href="#">MIN PROFIL</a>
  <a href="#">LOGGBOK</a>
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