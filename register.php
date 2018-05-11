<?php
    include_once 'connection.php';
    include_once 'registerUser.php';

?>

<html>
<head>
    <title> Hälsocoachen - Registrering </title>
    <link rel = "stylesheet" href = "main.css">
<body>
    <div id="wrapper">
        <h1> Registration </h1> 
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

                Förnamn:<br>
                <input type="text" name="firstname" id="firstname" value = "<?php echo $fname;?>"> <br>
                <p1> <?php echo $fname_error; ?> </p1><br>

                Efternamn:<br>
                <input type="text" name="lastname" id="lastname" value = "<?php echo $lname;?>"> <br>
                <p1> <?php echo $lname_error; ?> </p1><br>

                Email:<br>
                <input type="text" name="email" id="email" value = "<?php echo $email;?>"> <br>
                <p1> <?php echo $email_error; ?> </p1><br>

                Password:<br>
                <input type = "text" name="password" id ="password" value = "<?php echo $password;?>"><br>
                <p1> <?php echo $password_error; ?> </p1><br>

                <br>

                <input type="submit" name="submit" id="submit" value="Registera">
        </form>


</body>
</head>
</html>