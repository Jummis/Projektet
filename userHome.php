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
  <li><a href="default.asp">VAD ÄR HÄLSOCOACHING?</a></li>
  <li><a href="news.asp">OM OSS</a></li>
</ul> 
<h1> Welcome <?php echo $_SESSION['User']; ?> </h1>
<p1> You are logged in </p1>
<br><br>
<a href = "logout.php"><input type=submit name=logout value=Logout></a>
</div>

</body>
</html>