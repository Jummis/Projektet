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
<p1> Detta är din profil. Här kan du fylla i och uppdatera dina värden. </p1>
<br><br>

<div class="leftmenu">
  <a href="myPage.php">MINA SIDOR</a>
  <a href="#">FILER</a>
  <a href="myProfile.php" class="active">MIN PROFIL</a>
  <a href="#">LOGGBOK</a>
  <a href="#">HISTORIK</a>
</div>

