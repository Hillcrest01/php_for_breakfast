<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="4.0 getandpost.php" method="get"> <br>
      <label for="name">username:</label>  
      <input type="text" name="name"> <br> <br>

      <label for="password">Password:</label>
      <input type="password" name = "password"> <br>
      <input type="submit" value="login">
    </form>
</body>
</html>

<?php
//$_GET, $_POST -> special variables used to collect data from an HTML form data is sent to the file in the action attribute of <form> 
//      <form action="some_file.php" method="get">

//    $_GET =     Data is appended to the url, char limit, bookmark is possible, GET requests can be cached, better for a search page


//   $_POST =    Data is packaged inside the body of the HTTP request, more secure, no data limit, cannot bookmark, GET requests are not cached, better for submitting credentials
//Note the different ways we can add a line break


echo $_GET["name"] . "<br>";
echo "{$_GET["password"]} <br>"


?>