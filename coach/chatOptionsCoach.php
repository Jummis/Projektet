<?php
    include 'sessioncoach.php';
    include_once 'forum-type-process-coach.php';
?>

<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Hälsocoachen Chatt</title>
        <link rel = "stylesheet" href = "assets/maincoach.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>

    <body>
    <header>
        <ul>
            <div id "logoAll">
                <img id = "holdingHands" src = "../assets/img/hands-holding-heart.png">
                <a id = "Logga" href="index.php">HÄLSOCOACHEN</a>
                <li><a href="coachMyprofile.php">MINA SIDOR</a></li>
                <li><a href="chatOptions.php" class="active">LIVEFORUM</a></li>
                <li><a href="logout.php">LOGGA UT</a></li>
            </div>
        </ul>
    </header>

        <a id = "Tillbaka" href="coachMyPage.php">Tillbaka</a><br>
        <div id= "welcome">
            <h2> Välj hälsotema att jobba med</h2><br><br>
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
</html>