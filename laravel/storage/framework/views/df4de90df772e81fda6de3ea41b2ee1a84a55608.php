<h1>ZODIAK</h1>

<form action="<?php echo e(url('zodiac')); ?>" method="post">

    <?php echo csrf_field(); ?>
    Tanggal &nbsp;:&nbsp;
    <input type="number" name="tanggal" placeholder="masukkan tanggal" required>
    <br><br>
    Bulan &emsp;:
    &nbsp;<input type="number" name="bulan" placeholder="masukkan bulan" required>
    <br><br>
    <input type="submit" name="submit" value="kirim">

</form><?php /**PATH D:\xampp\htdocs\laravel\resources\views/zodiak.blade.php ENDPATH**/ ?>