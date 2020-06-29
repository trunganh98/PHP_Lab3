<?php
    $y = 2020;
    if (($y%4==0 && $y%100!=0) || ($y%400 == 0))
    {
        echo "$y is a leap year. <br />";
    }
    else
    {
        echo "$y is not a leap year. <br />";
    }
?>