<?php

    function selfMultiply(&$number)
    {
        $number *= $number;
        return $number;
    }
     
    $mynum = 5;
    echo $mynum . "\n";      
    selfMultiply($mynum);
    echo $mynum;
     echo"<br>";
     echo "This code is executed by vansh thakur!";
?>
