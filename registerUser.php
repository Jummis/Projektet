<?php
    include_once 'connection.php';

//returns a unique random salt-string
    function unique_salt() {    
    return substr(sha1(mt_rand()),0,22);
    }

    $fname = $lname = $email = $password = $birthnumber = "";
    $field_error = "";

    //if the register button is clicked
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $FirstName = mysqli_real_escape_string($connection, $_POST['firstname']);
        $LastName = mysqli_real_escape_string($connection, $_POST['lastname']);
        $Birthnumber = mysqli_real_escape_string($connection, $_POST['birth']);
        $Gender = mysqli_real_escape_string($connection, $_POST['gender']);
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
        $birthnumber = trim($Birthnumber);
    

        if (empty($fname) || empty($lname) || empty($email) || empty($password) || empty($birthnumber) || empty($Gender)) {
            $field_error = "Du måste fylla i alla fält!";
        } 

        else{
            //check if there is already an existing user
            if ($resultCheck > 0){
                $email_error = "Användaren existerar redan";
            }
            else {
                $unique_salt = unique_salt();
                $hash = sha1($unique_salt . $password);

                $insert = "INSERT INTO u (fname, lname, email, password, salt, pNr, gender) VALUES ('".$FirstName."', '".$LastName."', '".$Email."', '".$hash."','".$unique_salt."', '".$birthnumber."', '".$Gender."');";
                $resultat = $connection->query($insert);

                $fname = $lname = $email = $password = "";

                header ("Location: login.php");
            } 
        }
    }
?>