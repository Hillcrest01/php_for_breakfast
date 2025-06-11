
        <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error) : ?>
                <div> <?php echo $error ?> </div>

            <?php endforeach; ?>

        </div>
    <?php endif; ?>

    <form action="" method="post" enctype="multipart/form-data">

                <!-- check if the image exists first -->
        <?php if ($product['image']):  ?>
            <img src="<?php echo $product['image'] ?>" class="product-image" alt="product image here">

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


