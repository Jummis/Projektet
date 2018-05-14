<?php   
    include_once 'connection.php';
    include_once 'session.php';
    include_once 'savechatmessage.php';
?>

<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Hälsocoachen Chatt</title>
        <link rel = "stylesheet" href = "main.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>

    <body>
        <div id = "header">
            <ul>
            <h>HÄLSOCOACHEN</h>
            <li><a href="default.asp">MINA SIDOR</a></li>
            <li><a href="news.asp">CHATT</a></li>
            <li><a href="logout.php">LOGGA UT</a></li>
            </ul> 
        </div>

        <div id= "welcome">
            <h1> Välkommen till chatten <?php echo $_SESSION['User']; ?> </h1>
            <p1> Här kan du skicka ett meddelande till någon av våra hälsocoacher<br>
                 En coach kommer snart kontakta dig. </p1>
            <br><br>
        </div>

        <div id="chatcontainer">
        <div id="chatbox"></div>
            <form name="chat" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

            <input type="text" placeholder="Vänligen skriv ditt meddelande här" name="usermsg" id="usermsg"/>
            <input type="submit" name=submitmsg value=SKICKA id=sendmessage/>
            </form>
        </div>
 

    </body>

</html>