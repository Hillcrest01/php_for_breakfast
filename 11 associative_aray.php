<?php
//associative array is an array made of key=>value pairs
//item => price
$capitals = array("USA"=>"Washington DC" , "Japan"=>"Kyoto" , "India"=>"New Delhi");

echo $capitals["USA"];

$capitals["USA"] = "Miami, Florida";
$capitals["Kenya"] = "Nairobi";

foreach($capitals as $key => $value){
    echo "{$key} => {$value} <br>";
}

//array_pop - removes the last key, value
?>