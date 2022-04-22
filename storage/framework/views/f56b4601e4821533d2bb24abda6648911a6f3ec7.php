<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>game</title>
</head>

<body>
    <h1><?php echo e($game->title); ?></h1>
    <div>
        <img src="<?php echo e(asset('images/' . $game->img)); ?>">
        <p>ID: <?php echo e($game->id); ?></p>
        <p>price: <?php echo e($game->price); ?></p>
        <form action="<?php echo e(url('/cart/' . $game->id)); ?>" method="Post">
            <?php echo csrf_field(); ?>
            <input type="submit" value="Add to cart" />
        </form>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravel-les\resources\views/game.blade.php ENDPATH**/ ?>