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
            <li><a href="myPage.php">MINA SIDOR</a></li>
            <li><a href="chatt.php">CHATT</a></li>
            <li><a href="logout.php">LOGGA UT</a></li>
            </ul> 
        </div>

        <div id= "welcome">
            <h1> Välkommen till chatten <?php echo $_SESSION['User']; ?>!</h1>
            <p1> Här kan du skicka ett meddelande till någon av våra hälsocoacher<br>
                 En coach kommer snart kontakta dig. </p1>
            <br><br>
        </div>

        <div id="chatcontainer">

        <div id="chatbox">

        <script>
            var message = document.getElementById("chatbox");

            function scrollToBottom(message)
            {
            message.scrollTop = message.scrollHeight
            }

        </script>

            <?php
                // hämtar namn och kommentar från databasen
                $getdata = "SELECT from_id, message FROM Chatt";

                // sparar resultatet av queryn i en variabel
                $result = $connection->query($getdata);
                $userimg = '<img id ="userchatt" src="https://image.ibb.co/edWLgJ/default_user_image.png" alt="default_user_image">';
                

                while($row = mysqli_fetch_assoc($result))
                {  
                    echo "<h5>". $userimg . " " . $row["from_id"]."</h5>";
                    echo "<p3>".$row["message"]."</p3>"."<br>"."<br>";
                    echo "<p4>". "Tid: ". "</p4>";
                    echo "<hr>";
                }
        
            ?>

        </div>
            <form name="chat" method="POST" onsubmit="return scrollToBottom()" action="<?php echo $_SERVER['PHP_SELF'];?>">

            <textarea placeholder="Vänligen skriv ditt meddelande här" name="usermsg" id="usermsg"></textarea><br>
            <input type="submit" name="submitmsg" value="SKICKA" id="sendmessage"/>

            </form>

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