<?php

//for the comments refer to product_crud.php

/**@var $pdo \PDO */
require_once "../database.php";



$errors = [];

$price = '';
$description = '';
$title = '';

$product = [
   'image' => ''
];


require_once "../functions.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  require_once "../validate_product.php";

  if(empty($errors)){


    $statement = $pdo->prepare("INSERT INTO product (title, description, image, price, create_date, other_comments)
              VALUES (:title, :description, :image, :price ,:date, :other_comments )
              ");

    $statement->bindValue(':title', $title);
    $statement->bindValue(':description', $description);
    $statement->bindValue(':image', $imagePath);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':date', $date);
    $statement->bindValue(':other_comments', '');
    $statement->execute();
    header('Location: product_crud.php');
  }
}




?>

<!-- Whenever you click on submit, the form uses the input names to pass the data to the backend -->

<?php include_once "../views/partials/header.php"  ?>

<body>
  <h1>Create Products</h1>


  <?php include_once "../views/products/form.php" ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>