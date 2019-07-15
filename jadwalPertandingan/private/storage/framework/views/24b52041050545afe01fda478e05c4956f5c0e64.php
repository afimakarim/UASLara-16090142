<?php /* C:\xampp\htdocs\jadwalPertandingan\private\resources\views/pagesAdmin/editTim.blade.php */ ?>
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
                <div class="card" style="width: 104rem;">
                    <h5 class="card-header">Edit Daftar Tim</h5>
                     <div class="container">
                     <br>
                     <form class="" action="<?php echo e(route('updateTim',$daftarTim)); ?>" method="post">
                     <?php echo csrf_field(); ?>
                            <!-- <div class="form-group">
                                <label >ID Tim</label>
                                <input type="text" class="form-control" id="idTim" aria-describedby="idTim" placeholder="ID Tim">
                            </div> -->
                            <div class="form-group">
                                <label >Nama Tim</label>
                                <input type="text" class="form-control" name='namaTim' value="<?php echo e($daftarTim->namaTim); ?>" id="namaTim" aria-describedby="namaTim" placeholder="Nama Tim"required oninvalid="this.setCustomValidity('Nama Tim Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label >Asal Desa</label>
                                <input type="text" class="form-control" name='asal' value="<?php echo e($daftarTim->asal); ?>" id="asalDesa" placeholder="Asal Desa"required oninvalid="this.setCustomValidity('Asal Desa Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>  
                            <button id="daftar" type="submit" class="btn btn-success">Edit Tim</button> 
                        </form>
                    <br>
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