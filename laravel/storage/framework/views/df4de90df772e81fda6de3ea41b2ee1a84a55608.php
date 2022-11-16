<?php
    $p = 5;
    $l = 3;
    $luas = $p * $l;
?>



<?php $__env->startSection('content'); ?>

<h1><?php echo e($luas); ?></h1>

<h1><?php echo e($judul); ?></h1>

<h1>ZODIAK</h1>

<?php $__currentLoopData = $contoh; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2><?php echo e($key.' : '.$value); ?></h2>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<form action="<?php echo e(url('zodiac')); ?>" method="post">

    <?php echo csrf_field(); ?>
    Tanggal &nbsp;:&nbsp;
    <input type="number" name="tanggal" placeholder="masukkan tanggal" required>
    <br><br>
    Bulan &emsp;:
    &nbsp;<input type="number" name="bulan" placeholder="masukkan bulan" required>
    <br><br>
    <input type="submit" name="submit" value="kirim">

</form>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
    <a href="/">home</a>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('tugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\resources\views/zodiak.blade.php ENDPATH**/ ?>