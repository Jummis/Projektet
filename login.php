<?php
include_once 'connection.php';
include_once 'validateLogin.php';
?>

<html>
<head>
    <title> Hälsocoachen </title>
    <link rel = "stylesheet" href = "main.css">
<body>
<div id = "header">
<h1> PLEASE LOG IN BELOW </h1>
<a href = 'register.php'><p1> Not registred? </p1> </a>
<br>
<br>
<hr>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

                <div id = "form">
                Email:<br>
                <input type="text" name="email" id="email" value = "<?php echo $email;?>"> <br>
                <p1> <?php echo $email_error; ?> </p1><br>


                Password:<br>
                <input type = "text" name="password" id ="password" value = "<?php echo $password;?>"><br>
                <p1> <?php echo $password_error; ?> </p1><br>

                <br>

                <input type="submit" name="submit" id="submit" value="Log in">
        </form>

        <br><br>


    </div>
</body>
</head>
</html>