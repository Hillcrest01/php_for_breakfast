<?php

//for the comments refer to product_crud.php

//create an instance of PDO and perform the database connection configuration
$pdo = new PDO('mysql:host=localhost;dbname=products_crud', 'root', 'Kulundeng.Jamach.1');

//in case of an error

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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
    $title = $_POST['title'];
    $description = $_POST["description"];
    $price = $_POST["price"];



    if (!$title) {
        $errors[] = 'Please provide a title';
    }
    if (!$description) {
        $errors[] = 'Please provide a description';
    }
    if (!$price) {
        $errors[] = 'Please provide a price';
    }

    if (!is_dir('images')) {
        mkdir('images');
    }
    if (empty($errors)) {


        $image = $_FILES['image'] ?? null;
        $imagePath = $product['image'];




        //We check if the image has a tmp_name to ensure only if the image is uploaded is when we store it to our backend
        if ($image && $image['tmp_name']) {

            if ($product['image'] && file_exists($product['image'])) {
                unlink($product['image']);
            }

            $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
            mkdir(dirname($imagePath));
            echo $imagePath;

            move_uploaded_file($image['tmp_name'], $imagePath);
        }



        $statement = $pdo->prepare("UPDATE product SET title = :title, description = :description, image = :image, price = :price WHERE id=:id ");

        $statement->bindValue(':title', $title);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':id', $id);
        $statement->execute();
        header('Location: 22 product_crud.php');
    }
}

function randomString($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $str .= $characters[$index];
    }
    return $str;
}



?>

<!-- Whenever you click on submit, the form uses the input names to pass the data to the backend -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>create a product</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <h1> Update Product <?php echo $product['title'] ?> </h1>

    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error) : ?>
                <div> <?php echo $error ?> </div>

            <?php endforeach; ?>

        </div>
    <?php endif; ?>

    <form action="" method="post" enctype="multipart/form-data">

        <?php if ($product['image']):  ?>
            <img src="<?php echo $product['image'] ?>" alt="product image here">

        <?php endif; ?>

        <div class="form-group">
            <label for="image"> Product Image: </label> <br>
            <input type="file" name="image">
        </div>&nbsp;
        <div class="mb-3">
            <label for="product" class="form-label">Product Title:</label>
            <input type="text" name="title" class="form-control" value=<?php echo $title ?>>
        </div>

        <div class="mb-3">
            <label for="product" class="form-label">Product Description:</label>
            <textarea name="description" class="form-control" value=<?php echo $description ?>></textarea>
        </div>

        <div class="mb-3">
            <label for="product" class="form-label">Product Price:</label>
            <textarea name="price" type="text" class="form-control" value=<?php echo $price ?>></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>

</html>