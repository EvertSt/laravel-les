<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cart</h1>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h3><?php echo e($product->title); ?></h3>
    <form action="<?php echo e(url('deleteCart/' . $product->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input name="_method" type="hidden" value="DELETE">
        <input type="submit" value="Delete" />
    </form>
    <img src="<?php echo e(asset('images/' . $product->img)); ?>">
    <p>Price: <?php echo e($product->price); ?></p>
    <form action="<?php echo e(url('/updateCart/' . $product->id)); ?>" method="Post">
        <?php echo csrf_field(); ?>
        Quantity: <input type="number" value="1" name="qty" />
        <input type="submit" value="submit" />
    </form>
    <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($product->title); ?> <?php echo e($product->quantity); ?> x</p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <h3><?php echo e($text); ?> <?php echo e($total); ?></h3>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravel-les\resources\views/Cart.blade.php ENDPATH**/ ?>