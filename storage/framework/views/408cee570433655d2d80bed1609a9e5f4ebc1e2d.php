<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Resultaten voor <?php echo e($title); ?></h1>
    <hr>
    <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <img src="<?php echo e(asset('images/' . $game->img)); ?>">
    <p>ID: <?php echo e($game->id); ?></p>
    <p>Title: <?php echo e($game->title); ?></p>
    <p>Price: <?php echo e($game->price); ?></p>
    <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravel-les\resources\views/SearchedGames.blade.php ENDPATH**/ ?>