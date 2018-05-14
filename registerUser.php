<?php
include_once 'connection.php';

//returns a unique random salt-string
function unique_salt() {
 
    return substr(sha1(mt_rand()),0,22);
}

$fname = $lname = $email = $password = "";
$fname_error = $lname_error = $email_error = $password_error = "";

//if the register button is clicked
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {

    $FirstName = mysqli_real_escape_string($connection, $_POST['firstname']);
    $LastName = mysqli_real_escape_string($connection, $_POST['lastname']);
    $Email = mysqli_real_escape_string($connection, $_POST['email']);
    $Password = mysqli_real_escape_string($connection, $_POST['password']);

    //to check if user already exists
    $sql = "SELECT * FROM u WHERE email = '$Email'";
    $result = $connection->query($sql);
    $resultCheck = mysqli_num_rows($result);

    $fname = trim($FirstName);
    $lname = trim($LastName);
    $email = trim($Email);
    $password = trim($Password);
    

        if (empty($fname) || empty($lname) || empty($email) || empty($password)) {
        $password_error = "Du måste fylla i alla fält";
        } 

        else if ($fname_error == "" && $lname_error == "" && $email_error == "" && $password_error == "") 
        {
            //check if there is already an existing user
            if ($resultCheck > 0)
            {
                $email_error = "User already existst";
            }
            else {
            $unique_salt = unique_salt();
            $hash = sha1($unique_salt . $password);

            $insert = "INSERT INTO u (fname, lname, email, password, salt) VALUES ('".$FirstName."', '".$LastName."', '".$Email."', '".$hash."','".$unique_salt."');";
            $resultat = $connection->query($insert);

            echo $resultat;

            $fname = $lname = $email = $password = "";

            //header ("Location: index.php");

            }
            
       
        }
    }
?>