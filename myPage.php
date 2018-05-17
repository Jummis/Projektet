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
  <img id="rubrik" src="https://preview.ibb.co/hAiy5d/logo.jpg">
  <li><a href="myPage.php" class="active">MINA SIDOR</a></li>
            <li><a href="chatOptions.php">LIVEFORUM</a></li>
            <li><a href="logout.php">LOGGA UT</a></li>
  
</ul>
</div>

<div id= "wrapper2">
<h1> Hej <?php echo $_SESSION['User']; ?> </h1>
<p1> Välkommen till dina sidor. Här kan du se 
     dina filer, följa din utveckling<br> och 
     fylla i din privata loggbok. </p1>
<br><br>
</div>


<div class="leftmenu">
  <a href="myPage.php" class="active">MINA SIDOR</a>
  <a href="files.php">FILER</a>
  <a href="myProfile.php">MIN PROFIL</a>
  <a href="#">LOGGBOK</a>
  <a href="historik.php">HISTORIK</a>
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