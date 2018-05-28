<?php
include "sessioncoach.php";
include "showCoachInfo.php";
?>

<html>
    <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <title>Hälsocoachen</title>
      <link rel = "stylesheet" href = "assets/maincoach.css">
      <link href="https://fonts.googleapis.com/css?family=News+Cycle" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    </head>
    
    <body> 

      <header>
        <ul>
          <a id = "Logga" href="coachMyPage.php">HÄLSOCOACHEN</a>
          <li><a href="logoutCoach.php">LOGGA UT</a></li>
        </ul>
      </header>

      <a id = "Tillbaka" href="coachsettings.php">Tillbaka</a>

      <div id= "wrapperMyProfile">

          <div id = "wrapper5">
          <h3> Sök hälsoklient </h3><br>

        <form name="chat" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type = "text" placeholder = "AnvändarID" id = "inputBox" name = "userID"><br>
            <input type = "text" placeholder = "Namn" id = "inputBox" name = "fname"><br>
                        
                        <input type="radio" name="gender" id = "gender" value="Man" class = "radio">
                        Man
                  
                        <input type="radio" name="gender" id = "gender" value="Kvinna" class = "radio">
                        Kvinna<br>
                
            <input type="submit" name="submitmsg" value="Sök" id="searchclient">
            </form>

            </div>

        <div id="sendbox">

            <?php
                if ($_SERVER["REQUEST_METHOD"] == 'POST')
                {

                    $userID = $connection->real_escape_string($_POST['userID']);
                    $fname = $connection->real_escape_string($_POST['fname']);

                    if ($_SERVER["REQUEST_METHOD"] == 'POST' && !empty($userID)){
                        $userID = $connection->real_escape_string($_POST['userID']);
                        $get = "SELECT * FROM u WHERE userID = $userID";
                        $result = $connection->query($get);            
                    }

                    else if ($_SERVER["REQUEST_METHOD"] == 'POST'&& !empty($fname)) {            
                        $get = "SELECT * FROM u WHERE fname = '".$fname."'";
                        $result = $connection->query($get);   
                    }

                   else if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST['gender'])) {
                        $gender = $connection->real_escape_string($_POST['gender']);
                        $get = "SELECT * FROM u WHERE gender = '".$gender."'";
                        $result = $connection->query($get);   
                    }
                       
                    while($row = mysqli_fetch_assoc($result)){       
                        echo "<p2> AnvändarID: " . $row["userID"] ."</p2><br>";
                        echo "<p2>" . $row["fname"] ." </p2>";
                        echo "<p2>" . $row["lname"] ."</p2><br>";
                        echo "<p2>" . $row["email"] ."</p2><br>";
                        echo "<p2>" . $row["gender"] ."</p2><br><hr>";                                        
                    }
                }   
            ?>

        </div>

    </body>
</html>

