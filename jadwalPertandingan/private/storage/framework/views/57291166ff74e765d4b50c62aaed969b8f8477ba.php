<?php /* C:\xampp\htdocs\jadwalPertandingan\private\resources\views/pages/home.blade.php */ ?>
<?php $__env->startSection('main'); ?>
<div id="homepage">
    <h2>Beranda</h2>
    <p>Selamat Datang! Selamat Belajar Laravel ! </p>
</div>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('footer'); ?>
<div id="footer">
    <p>&copy; 2019 | Framework Programming Poltek Tegal </p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>