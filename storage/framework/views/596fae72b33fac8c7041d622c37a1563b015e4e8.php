<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello, <?php echo e($user['username']); ?> !</h1>
    <ul>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($user['id'] % 2 == 0): ?>
                <li>Пользователь с четным ID.<?php echo e($user['username']); ?></li>
            <?php else: ?>
                <li>Пользователь с нечетным ID. <?php echo e($user['username']); ?></li>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html><?php /**PATH C:\OSPanel\domains\denis-blog\resources\views/index.blade.php ENDPATH**/ ?>