<?php

//array - "variable" that can hold more than one value at a time

$foods = array("apple", "orange" , "banana" , "coconut");

$foods[0] = "Pineapple";


echo $foods[0]. "<br>";
echo $foods[1]. "<br>";
echo $foods[2]. "<br>";
echo $foods[3]. "<br>";

echo "Let's use for each <br>";

//push function to add new elements to the array.

array_push($foods, "mangoes" , "lemons");

//array_pop function to remove the last element from the array

array_pop($foods);

//to reverse an array

$new_array = array_reverse($foods);

//count function to count the number of items
echo count($foods);

foreach($new_array as $arr){
    echo $arr. "<br>";
}

foreach($foods as $food){
    echo $food . "<br>";
}

?>