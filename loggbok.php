<?php
include_once "connection.php";
include_once "saveLoggMess.php";
?>

<html>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Hälsocoachen Loggbok</title>
        <link rel = "stylesheet" href = "assets/main.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>

    <body>
        <header>
            <ul>
                <a id = "Logga" href="userHome.php">HÄLSOCOACHEN</a>
                <li><a href="myPage.php" class="active">MINA SIDOR</a></li>
                <li><a href="chatOptions.php">LIVEFORUM</a></li>
                <li><a href="logout.php">LOGGA UT</a></li>  
            </ul>
        </header>

        <div id = "wrapper4Logg">
            <div id = "wrapperLogg">
                <p id="rubrikLoggbok">Dina senaste logginlägg:</p>
                <div id="historikbox">

                <?php
                    $clientID=$_SESSION['ID'];
                    $getData = "SELECT datum, logg_mess FROM Loggbok WHERE clientID = '$clientID' ";
                    $resultData = $connection->query($getData);

                    while($row = mysqli_fetch_assoc($resultData)){
                        echo "<h5>".$row["datum"]."</h5>";
                        echo $row["logg_mess"] . "<br>";
                        echo "<hr>";  
                    }  
                ?>
                </div>

                <div id ="loggMessFält">
                    <form name="loggMessForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                        <p4 id = "loggMess_error"><?php echo $loggMess_error; ?></p4>
                        <textarea id = "loggMessRuta" name ="loggMessRuta" placeholder="Skriv ditt logginlägg här"></textarea><br>
                        <input id="knappLoggMess" type="submit" value="SKICKA">
                    </form>
                </div>  
            </div>


            <div class="leftmenu">
                <a class = "veryactive">MINA SIDOR</a>
                <a href="files.php">FILER</a>
                <a href="myProfile.php">MIN PROFIL</a>
                <a href="loggbok.php" class = "active">LOGGBOK</a>
                <a href="historik/historik.php">HISTORIK</a>
            </div>
        </div>

    </body>

    <footer>
        <p id="kontaktrubrik">HÄLSOCOACHEN</p>
        <p id="kontaktuppg">Kontaktuppgifter</p>

        <div class="row">
            <div class="column">
                <img src="https://image.ibb.co/bUdviy/phone_call_1.png"><br><br>
                <p3> 0703457947 </p3>
            </div>
            <div class="column">
                <img src="https://image.ibb.co/jSQmqd/envelope.png"><br><br>
                <p3> halsocoachen@coach.se </p3>
            </div>
        </div> 
    </footer>
</html>