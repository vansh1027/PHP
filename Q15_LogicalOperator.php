<?php

    $year = 2000;
    
    // Leap years are divisible by 400 or by 4 but not 100
    if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0)))
    {
        echo "$year is a leap year.";
    }
    else
    {
        echo "$year is not a leap year.";
    }
    echo "<br> This code is executed by vansh thakur,2220100302";

?>
