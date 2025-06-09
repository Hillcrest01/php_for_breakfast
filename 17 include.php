<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>This is for testing include functionality</p>
    <p>We have defined the footer in footer.php and now trying to access it using include.php</p>
</body>
</html>


<?php

// include() + Copies the content of a file(php/html/text) and includes it in your php file.
// Sections of our website become reusable
// Changes only need to be made in one place

include 'footer.php';
?>