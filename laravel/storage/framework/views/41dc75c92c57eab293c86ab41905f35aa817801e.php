

<?php $__env->startSection('content'); ?>

<h1>KALKULATOR</h1>

<form action="<?php echo e(url('calculator')); ?>" method="post">

    <?php echo csrf_field(); ?>
    Bilangan 1 &nbsp;:&ensp;
    <input type="number" name="bil1" placeholder="masukkan bilangan 1" required>
    <br><br>
    Bilangan 2 &nbsp;:&ensp;
    <input type="number" name="bil2" placeholder="masukkan bilangan 2" required>
    <br><br>
    <input type="submit" value="tambah" name="tambah">
    <br><br>
    <input type="submit" value="kurang" name="kurang">
    <br><br>
    <input type="submit" value="kali" name="kali">
    <br><br>
    <input type="submit" name="bagi" value="bagi">
    <br><br>
    <input type="submit" name="modulus" value="modulus">
    <br><br>
    <input type="submit" name="pangkat" value="pangkat">

</form>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
    <a href="/">home</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\resources\views/kalkulator.blade.php ENDPATH**/ ?>