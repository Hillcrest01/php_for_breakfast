<?php

//Magic constants - are constants which change their value based on the execution context.
echo __DIR__.'<br>';
echo __LINE__;

//Create directory
mkdir('test');


//Rename directory
rename('test' , 'test2');

//Delete dir
rmdir('test2');

//read files and folders
echo file_get_contents('1.0.index.php');

//write contents to a file

file_put_contents('1.0.index.php' , 'echo "This is for testing purposes."');

//Read contents from URL
file_get_contents('URL here');

//file exists
file_exists('1.0.index.php');

//is a given folder a directory or not?
is_dir('../websiite')


?>