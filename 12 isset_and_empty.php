<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="12 isset_and_empty.php" method="post">
        <label for="username">username: </label>
        <input type="text" name="username"> <br>

        <label for="username">password: </label>
        <input type="text" name="password"> <br>

        <input type="submit" name="login" value="login">


    </form>
</body>
</html>



<?php

//isset() -Returns true if a variable is declared and not null
//empty - Returns true if a variable is not declared, false, null

foreach($_POST as $key => $value){
    echo "{$key} = {$value} <br>";
}

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username)){
        echo "Hey, hey , you have no username";
    }

    elseif(empty($password)){
        echo "Yooh yooh, you got no password mahn";
    }

    else{
        echo "Greetings Mr. {$username}";
    }
}

?>