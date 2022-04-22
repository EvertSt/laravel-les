<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AddGame</title>
</head>

<body>
    <h1>Add Game</h1>

    <form action="<?php echo e(url('/games')); ?>" enctype="multipart/form-data" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="title" placeholder="Title" />
        <input type="number" name="price" step="any" placeholder="price" />
        <input type="file" name="img" />
        <input type="submit">
    </form>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravel-les\resources\views/AddGame.blade.php ENDPATH**/ ?>