<?php
//connect to the databse using pdo

/**@var $pdo \PDO */
require_once "../database.php";


$id = $_POST['id'] ?? null;

if(!$id){
    header("Location: product_crud.php");
    exit;
}

$statement=$pdo->prepare('DELETE FROM product WHERE id=:id');
$statement->bindValue(':id' , $id);
$statement->execute();

header('Location: product_crud.php');

?>