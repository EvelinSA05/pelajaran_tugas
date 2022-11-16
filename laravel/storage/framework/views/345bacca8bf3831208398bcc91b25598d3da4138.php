

<?php $__env->startSection('content'); ?>

<h1>Suhu</h1>

<form action="<?php echo e(url('temperature')); ?>" method="post">

    <?php echo csrf_field(); ?>
    Suhu :
    

    <input type="number" name="suhu" placeholder="suhu" id="">
    <input type="text" name="ket" placeholder="ket" id="">
    <br><br>
    <input type="submit" name="celcius" value="Celcius" id="">
    <br><br>
    <input type="submit" name="fahrenheit" value="Fahrenheit" id="">
    <br><br>
    <input type="submit" name="reamur" value="Reamur" id="">
    <br><br>
    <input type="submit" name="kelvin" value="Kelvin" id="">

</form>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('menu'); ?>
    <br><br>
    <a href="/">home</a>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('tugas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\laravel\resources\views/suhu.blade.php ENDPATH**/ ?>