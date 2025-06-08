<?php

//They are used to combine conditional statements,
//if(condition1 && condition2)

//&& - True if both conditions are true
//|| -True if at least one condition is true
//! - True if false, false if true

$temp = 27;

echo "The temperature today is{$temp} degree Celsius";

if($temp < 10 && $temp > 35){
    echo "the temperature is unfavourable";
}

?> 