<?php

$title = $_POST['title'];
  $description = $_POST["description"];
  $price = $_POST["price"];
  $date = date('Y-m-d H:i:s');
  $imagePath = '';

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
    $imagePath = '';


    //We check if the image has a tmp_name to ensure only if the image is uploaded is when we store it to our backend
    if ($image && $image['tmp_name']) {

      $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
      mkdir(dirname($imagePath));

      move_uploaded_file($image['tmp_name'], $imagePath);
    }
  
  }



?>