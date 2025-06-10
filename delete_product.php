<?php
//connect to the databse using pdo

$pdo = new PDO("mysql:host=localhost;dbname=products_crud" , 'root' , 'Kulundeng.Jamach.1');

//check for errors and throw them
$pdo->setAttribute(PDO:: ATTR_ERRMODE , PDO:: ERRMODE_EXCEPTION);


$id = $_POST['id'] ?? null;

if(!$id){
    header("Location: product_crud.php");
    exit;
}

$statement=$pdo->prepare('DELETE FROM product WHERE id=:id');
$statement->bindValue(':id' , $id);
$statement->execute();

header('Location: 22 product_crud.php');

?>