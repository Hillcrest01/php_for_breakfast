<?php 

function happy_birthday($username, $age){
    echo "Happy birthday dear {$username} <br> <br>";
    echo "You are turning {$age} years old <br> <br>";

}

happy_birthday("Peter" , 23);


function is_even($number){
    $result = $number % 2;
    
    return $result;
}


echo is_even(9);

function get_hypotenuse($base, $height){
    $hypotenuse = null;
    $hypotenuse = sqrt($base ** 2 + $height ** 2);
    return $hypotenuse;
}

echo get_hypotenuse(3,4);
?>