<?php /* C:\xampp\htdocs\jadwalPertandingan\private\resources\views/pagesAdmin/daftarTim.blade.php */ ?>
<?php $__env->startSection('main'); ?>
<div id="daftarTim">
<br> 
<br> 
    <div class="container-fluid">
    <?php if(session('sukses')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo e(session('sukses')); ?>

        </div>
    <?php endif; ?>
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 34rem;">
                    <h5 class="card-header">Tambah Daftar Tim</h5>
                     <div class="container">
                     <br>
                     <form class="" action="<?php echo e(url('store2')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <!-- <div class="form-group">
                                <label >ID Tim</label>
                                <input type="text" class="form-control" id="idTim" aria-describedby="idTim" placeholder="ID Tim">
                            </div> -->
                            <div class="form-group">
                                <label >Nama Tim</label>
                                <input type="text" class="form-control" name='namaTim' id="namaTim"  placeholder="Nama Tim" required oninvalid="this.setCustomValidity('Nama Tim Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                
                            </div>
                            <div class="form-group">
                                <label >Asal Desa</label>
                                <input type="text" class="form-control" name='asal' id="asalDesa" placeholder="Asal Desa"required oninvalid="this.setCustomValidity('Asal Desa Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>  
                            <button id="daftar" type="submit" class="btn btn-success">Tambah Tim</button> 
                        </form>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card">
                    <h5 class="card-header">Daftar Tim</h5>
                    <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                            <!-- <th scope="col" >ID Tim</th> -->
                            <th scope="col" >Nama Tim</th>
                            <th scope="col" >Asal Desa</th>
                            <th scope="col" >Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $daftarTim; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $daftarTim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <!-- <td>012</td> -->
                            <td><?php echo e($daftarTim->namaTim); ?></td>
                            <td><?php echo e($daftarTim->asal); ?></td>
                            <td class="text-center"><a class="btn btn-primary btn-sm" href="tim/<?php echo e($daftarTim->id); ?>/editTim">Edit</a>
                            <a class="btn btn-danger btn-sm" href="<?php echo e(route('deleteTim',$daftarTim)); ?>"onclick="return confirm('Yakin Anda ingin menghapus Data ini ?')">Hapus</a></td>
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