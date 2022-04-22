<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <title>Games</title>
</head>


<body class="bg-gray-50">
    <nav class="grid grid-cols-5 place-items-center w-screen max-w-full h-20 border-y-2 border-y-teal-700 bg-teal-400 rounded-b-lg">
        <div class="col-span-2">
            <form method="GET" action="<?php echo e(url('/search')); ?>">
                <?php echo csrf_field(); ?>
                <input class="h-6 py-4 rounded-2xl border-0" type="text" name="game" placeholder="search">
                <input class="bg-white border-2 border-black rounded-full ml-2 px-3" type="submit" value="search" />
            </form>
        </div>
        <div class="col-span-2 text-l">
            <a href="<?php echo e(url('games/create')); ?>" class="bg-teal-50 border-2 border-teal-700 rounded-md px-4 py-2 mx-4">Create</a>
            <a href="<?php echo e(url('/cart')); ?>" class="bg-teal-50 border-2 border-teal-700 rounded-md px-6 py-2 ml-16">Cart</a>
        </div>
        <div class="col-span-1">
            <a class="text-xl px-3 ml-3 py-1"><?php echo e($user->name); ?></a>
            <form class="bg-teal-50 border-2 border-teal-700 rounded-md px-3 py-1">
                <button>Logout</button>
            </form>
        </div>
    </nav>
    <div class="flex flex-wrap mt-2 justify-between h-screen w-screen max-w-full text-lg text-white">
        <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="flex-row text-center m-4 bg-teal-800">
            <img src="<?php echo e(asset('images/' . $game->img)); ?>">
            <p>ID: <?php echo e($game->id); ?></p>
            <p>Title: <?php echo e($game->title); ?></p>
            <p>Price: <?php echo e($game->price); ?></p>
            <form action="<?php echo e(url('/games/' . $game->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input name="_method" type="hidden" value="DELETE">
                <input type="submit" value="Delete" />
            </form>
            <form action="<?php echo e(url('/games/' . $game->id)); ?>" method="GET">
                <?php echo csrf_field(); ?>
                <input type="submit" value="View" />
            </form>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\laravel-les\resources\views/games.blade.php ENDPATH**/ ?>