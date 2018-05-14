<?php

include 'connection.php';

$name = $email = $password = "";
$name_error = $email_error = $password_error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
    

    $Email = mysqli_real_escape_string($connection, $_POST['email']);
    $Password = mysqli_real_escape_string($connection, $_POST['password']);

    //check if the user exists
    $sql = "SELECT * FROM u WHERE email = '$Email'";
    $result = $connection->query($sql);
    $resultCheck = mysqli_num_rows($result);

    $email = trim($Email);
    $password = trim($Password);

        if (empty($email) || $email == "Email" ) {
        $email_error = "Fyll i din e-postadress";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                $email_error = "Ogiltigt e-postadress"; 
                } 

        if (empty($password)) {
        $password_error = "Ange ditt lösenord";
        } 

        if ($email_error == "" && $password_error == "") 
        {
            //check if the user exists
              if ($resultCheck == 0)
            {
                $email_error = "Användare finns inte!";
            }

            else 
            {

            //hämta salt från databasen       
            $saltFromDatabase = "SELECT salt FROM u WHERE email = '$Email'";
            $result = $connection->query($saltFromDatabase); 

            while ($row = $result->fetch_row()){
                $Salt = $row[0];
            }

            //hasha salt och lösenord
            $hash = sha1($Salt . $Password);     

            //hämta hash från databasen
            $sql = "SELECT password FROM u WHERE email = '$Email'";
            $data = $connection->query($sql);

            while ($row = $data-> fetch_row()){
                $Datan = $row[0];
            }

            //om dem är lika
            if($hash == $Datan)
            {
            $name = "SELECT fname FROM u WHERE email = '$Email' AND password = '$Datan'";
            $Name = $connection->query($name);

            while ($row = $Name-> fetch_row()){
                $Data = $row[0];
            }
            session_start();
            $_SESSION ['User'] = $Data;
            header ("Location: userHome.php"); 
            $name = $email = $password = "";          
            }
            else 
            {
            $password_error = "Wrong password!";
            }

            }
                          
        }
        
    }

?>