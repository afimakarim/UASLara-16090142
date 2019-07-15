<?php /* C:\xampp\htdocs\jadwalPertandingan\private\resources\views/pagesAdmin/daftarPemain.blade.php */ ?>
<?php $__env->startSection('main'); ?>
<div id="daftarPemain">
<br> 
<br> 
    <div class="container-fluid">
        <?php if(session('sukses')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(session('sukses')); ?>

            </div>
        <?php endif; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 34rem;">
                    <h5 class="card-header">Tambah Daftar Pemain</h5>
                     <div class="container">
                     <br>
                     <form class="" action="<?php echo e(url('store3')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label >Nama Tim</label>
                                <select name="nama_tim" id="nama_tim" class="form-control">
                                <option value="">--Pilih tim--</option>
                                    <?php $__currentLoopData = $teams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($tim->namaTim); ?>"><?php echo e($tim->namaTim); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Nama Pemain</label>
                                <input type="text" name="nama_pemain" class="form-control" id="nama_pemain" aria-describedby="nama_pemain" placeholder="Nama Pemain"required oninvalid="this.setCustomValidity('Nama Pemain Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label >No Punggung</label>
                                <input type="text" name="no_punggung" class="form-control" id="no_punggung" placeholder="No Punggung" required oninvalid="this.setCustomValidity('No Punggung Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>  
                            <button id="daftar" type="submit" class="btn btn-success">Daftar Pemain</button> 
                        </form>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card">
                    <h5 class="card-header">Daftar Pemain</h5>
                    <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                            <th scope="col" >Nama Tim</th>
                            <th scope="col" >Nama Pemain</th>
                            <th scope="col" >No Punggung</th>
                            <th scope="col" >Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $daftarPemain; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $daftarPemain): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td><?php echo e($daftarPemain->nama_tim); ?></td>
                            <td><?php echo e($daftarPemain->nama_pemain); ?></td>
                            <td><?php echo e($daftarPemain->no_punggung); ?></td>
                            <td class="text-center"> <a class="btn btn-primary btn-sm" href="pemain/<?php echo e($daftarPemain->id); ?>/editPemain">Edit</a>
                            <a class="btn btn-danger btn-sm" href="<?php echo e(route('deletePemain',$daftarPemain)); ?>"onclick="return confirm('Yakin Anda ingin menghapus Data ini ?')">Hapus</a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
     </div>
     
</div>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('footer'); ?>
<div id="footer">
    <p>&copy; 2019 | Framework Programming Poltek Tegal </p>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>