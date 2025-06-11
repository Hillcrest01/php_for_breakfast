<?php

/**@var $pdo \PDO */
require_once "../database.php";

$id = $_GET['id'];

if (!$id) {
    header('Location: 22 product_crud.php');
    exit;
}

$statement = $pdo->prepare('SELECT * FROM product WHERE id=:id');
$statement->bindValue(':id', $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);

$errors = [];

$price = $product['price'];
$description = $product['description'];
$title = $product['title'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
        require_once "../validate_product.php";

        $statement = $pdo->prepare("UPDATE product SET title = :title, description = :description, image = :image, price = :price WHERE id=:id ");

        $statement->bindValue(':title', $title);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':id', $id);
        $statement->execute();
        header('Location: product_crud.php');
    }


require_once "../functions.php";

?>

<!-- Whenever you click on submit, the form uses the input names to pass the data to the backend -->

<?php include_once "../views/partials/header.php"  ?>

<body>
    <h1> Update Product <?php echo $product['title'] ?> </h1>

<?php include_once "../views/products/form.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>