<?php
    include_once "connection.php";
    include_once "session.php";

    $formType="";

   if (isset( $_GET['Kost'])){ 
       $formType= "Kost";
    }

    if (isset( $_GET['Träning'])){ 
        $formType="TRÄNING";
    }

    if (isset( $_GET['Stress'])){ 
        $formType="Stress";
    }

    if (isset( $_GET['Sömn'])){ 
        $formType="Sömn";
    }

    if (isset( $_GET['AT'])){ 
        $formType="Akohol/Tobak";
    }

    if (isset( $_GET['Allmänt'])){ 
        $formType="Allmänt";
    }
?>