<?php

    // Starting session
    session_start();
     
    // Storing Session Variables
    $_SESSION["firstname"] = "Vansh";
    $_SESSION["lastname"] = "Thakue";
    
    
    //Accessing Session Variables
    echo "First name is " . $_SESSION["firstname"] . "<br>";
    echo "Last name is " . $_SESSION["lastname"];
    echo "This code is executed by vansh thakur!";
 
?>
