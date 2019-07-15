<?php /* C:\xampp\htdocs\jadwalPertandingan\private\resources\views/pagesUser/jadwalUser.blade.php */ ?>
<?php $__env->startSection('main'); ?>
<div id="jadwal">
<br> 
<br> 
<div class="container-fluid">
    <form class="" action="<?php echo e(url('store')); ?>" method="post">
        <?php echo e(csrf_field()); ?>

    <div class="row">
    <?php $__currentLoopData = $jadwalPertandingan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwalPertandingan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-sm-3" >
                <div style="padding: 0px 0px 15px 0px ;">
                    <div class="card text-center" >
                        <div class="card-header">
                            <h2><?php echo e($jadwalPertandingan->tanggal); ?></h2>
                        </div>
                        <div class="card-body">
                            <p class="card-title"><?php echo e($jadwalPertandingan->status); ?></p>
                            <h3 class="card-text"><?php echo e($jadwalPertandingan->tim_1); ?> vs <?php echo e($jadwalPertandingan->tim_2); ?></h3> 
                            <p class="card-title"><?php echo e($jadwalPertandingan->tempat); ?></p>
                            <p class="card-title"><?php echo e($jadwalPertandingan->status); ?></p>
                        </div>
                    </div>
                </div>
            </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?> 

<?php $__env->startSection('footer'); ?>
<div id="footer">
    <p>&copy; 2019 | Framework Programming Poltek Tegal </p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templateuser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>