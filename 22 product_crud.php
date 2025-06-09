<?php

//we are using PDO to connect to the database
//First, we create an instance of PDO

//The line below makes the connection
$pdo = new PDO('mysql:host=localhost;dbname=products_crud' , 'root', 'Kulundeng.Jamach.1');

//Let's throw an error in case of any
$pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);


//To select all products

$statement = $pdo->prepare('SELECT * FROM product ORDER BY create_date DESC');
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';

// var_dump($products);

// echo '</pre>'

?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  </head>
  <body>
    <h1>List of Products</h1>
        <table class="table">
  <thead>

    <p>
        <a href="create_product.php" class="btn btn-outline-success">Create Product</a>
    </p>  

    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Create Date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>


    <?php foreach($products as $i => $product) {?>
            <tr>
      <th scope="row"> <?php echo $i + 1 ?> </th>
      <td></td>
      <td> <?php echo $product['title'] ?> </td>
      <td> <?php echo $product['price'] ?> </td>
      <td> <?php echo $product['create_date'] ?> </td>
      <td>
        <button type="button" class="btn btn-sm btn-outline-primary">Edit</button>
        <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
      </td>
    </tr>
    <?php } ?>

  </tbody>
</table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>






