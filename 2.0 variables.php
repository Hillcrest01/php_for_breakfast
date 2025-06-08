<?php

// We declare variables in php using a dpllar sign $, and then when referencing the name, we use the dollar sign, to use it as a string literal, 
// we add the curly brackets to refer to the variable using the dollar sign.
$name = "Petra";
$email = "petra@hotmail.com";
$age = 21;

$price = 100.12;
$quantity = 5;
$total = $price * $quantity;

echo "My name is <b> {$name} </b> I am {$age} years old and my email is {$email}";

//we cannot precede the variable with a dollar sign, thus we use an escape character \
echo "<br>The price of that pizza is \${$price} ";

echo "<br> You have ordered {$quantity} pizzas and each goes
at \${$price}. So your total is <b>{$total}</b>"
?>