<?php /* C:\xampp\htdocs\jadwalPertandingan\private\resources\views/pagesUser/daftarTimUser.blade.php */ ?>
<?php $__env->startSection('main'); ?>
<br>
    <div class="card">
        <h5 class="card-header">Daftar Pemain</h5>
        <div class="card-body">
        <table class="table table-bordered text-center">
        <thead>
        <thead>
            <tr>
            <th scope="col" >Nama Tim</th>
            <th scope="col" >Nama Pemain</th>
            <th scope="col" >No Punggung</th>
            </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $daftarPemain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $daftarPemain): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
            <td><?php echo e($daftarPemain->nama_tim); ?></td>
            <td><?php echo e($daftarPemain->nama_pemain); ?></td>
            <td><?php echo e($daftarPemain->no_punggung); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('footer'); ?>
<div id="footer">
    <p>&copy; 2019 | Framework Programming Poltek Tegal </p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templateUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>