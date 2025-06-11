<?php
/**@var $pdo \PDO */
require_once "../database.php";

$search  =$_GET['search'] ?? "";

if ($search){
  $statement = $pdo->prepare('SELECT * FROM product WHERE title LIKE :title ORDER BY create_date DESC');
  $statement->bindValue(':title', "%$search%");
}
else{
$statement = $pdo->prepare('SELECT * FROM product ORDER BY create_date DESC');
}


//To select all products


$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';

// var_dump($products);

// echo '</pre>'

?>



<?php include_once "../views/partials/header.php"   ?>

<body>

    <form action="22 product_crud.php" method="GET">
       <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="search for a product" value="<?php echo $search ?>" name="search">
      <button class="btn btn-secondary" type="button"> Search </button>
    </form>
    
  </div>




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


      <?php foreach ($products as $i => $product) { ?>
        <tr>
          <th scope="row"> <?php echo $i + 1 ?> </th>
          <td> <img src="<?php echo $product['image'] ?>" alt="product image here" class="product-image"> </td>
          <td> <?php echo $product['title'] ?> </td>
          <td> <?php echo $product['price'] ?> </td>
          <td> <?php echo $product['create_date'] ?> </td>
          <td>
            <a href="update_product.php?id=<?php echo $product['id'] ?>" type="button" class="btn btn-sm btn-outline-primary">Edit</a>
            <form style="display:inline-block" action="delete_product.php" method="post">
              <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
              <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
            </form>
          </td>
        </tr>
      <?php } ?>

    </tbody>
  </table>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>