<?php

    if (!(file_exists("welcome.txt")))
    {
        echo "could not open the file<br>";
    }
    
    else
    {
        $text = fopen("welcome.txt","r");
        var_dump($text)."<br>";
    }
    echo "This code is executed by vansh thakur!";
?>