<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radius</title>
</head>
<body>
    <form action="5.0 math_functions.php" method="post">
        <label for="radius" >Radius:</label>
        <input type="number" name="radius">
        <input type="submit" value="calculate">
    </form> <br>
</body>
</html>


<?php

$radius = $_POST["radius"];
$circumference = null;
$area = null;
$volume = null;

$circumference = (round(2 * pi() * $radius));

$area = round(pi() * (pow($radius, 2)));

$volume = 4/3 *pi() *pow($radius, 3);
$volume = round($volume, 3);


echo "The radius is {$radius} cm <br>"; 
echo "And the circumference is {$circumference} cm";
echo "<br>And the area is {$area}cm squared <br>";
echo "The volume is {$volume}";

//abs() - for absolute value
//round()
//round(value, no.of decimal places)
//floor()
//ceil()
//pow(value, raise power)
//sqrt()
//max()
//min()
//pi() -> 3.142
//rand() -> completely random numbers
//rand(minimum, maximum)


?>