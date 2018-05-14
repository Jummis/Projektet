<?php   
    include_once 'connection';
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
  <li><a href="news.asp">CHATT</a></li>
  <li><a href="logout.php">LOGGA UT</a></li>
</ul> 
</div>

<div id= "welcome">
<h1> Hej <?php echo $_SESSION['User']; ?> </h1>
<p1> Hur kan vi hjälpa dig idag?<br>
     Tryck på chatta och berätta för oss vad<br>
     vi kan göra för dig. </p1>
<br><br>

<input type="submit" name=chattbutton value=CHATTA onsubmit="chatt.php"></a>

</div>

</body>
</html>