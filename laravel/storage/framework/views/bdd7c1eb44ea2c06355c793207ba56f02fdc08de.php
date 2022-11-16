<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas</title>
</head>
<body>
    <div>
        <div>
        <h1>Tugas Laravel</h1>
        <ul>
            <li><a href="<?php echo e(url('zodiak')); ?>">Zodiak</a></li>
            <li><a href="<?php echo e(url('kalkulator')); ?>">Kalkulator</a></li>
            <li><a href="<?php echo e(url('suhu')); ?>">Suhu</a></li>
        </ul>
        </div>
        <div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <div>
            <?php echo $__env->yieldContent('menu'); ?>
        </div>
    </div>
</body>
</html><?php /**PATH D:\xampp\htdocs\laravel\resources\views/tugas.blade.php ENDPATH**/ ?>