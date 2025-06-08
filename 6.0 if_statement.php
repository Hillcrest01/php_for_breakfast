<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="6.0 if_statement.php" method="POST">
    <label for="year_of_birth">Year of Birth:</label>
    <input type="number" name="year_of_birth">
    </form>

</body>
</html>


<?php

$current_year = date('Y');
$year_of_birth = $_POST["year_of_birth"];

$age = $current_year - $year_of_birth;

echo "{$age} <br>";

if($age >= 18){
    echo "you are an adult now";
}

elseif($age == 0){
    echo "bro just got born😂";
}
elseif($age < 0){
    echo "Are you for real bro!!";
}

else{
    echo "You're just a kid";
}

?>