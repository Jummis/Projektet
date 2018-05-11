<?php   
    include_once 'connection';
    include_once 'session.php';
?>

<html>
<head>
    <title> Hälsocoachen - homepage </title>
    <link rel = "stylesheet" href = "main.css">

<body>
<div id = "header">
<h1> Welcome <?php echo $_SESSION['User']; ?> </h1>
<p1> You are logged in </p1>
<br><br>
<a href = "logout.php"><input type=submit name=logout value=Logout></a>

</div>

</body>
</head>
</html>