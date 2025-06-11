<?php
//this is for the database configuration

//create aninstance of the PDO

$pdo = new PDO("mysql:host=localhost;dbname=products_crud" , "root" , "Kulundeng.Jamach.1");

//Catch the errors and throw them
$pdo->setAttribute(PDO:: ATTR_ERRMODE , PDO:: ERRMODE_EXCEPTION);

return $pdo;




?>