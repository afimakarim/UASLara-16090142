<?php /* C:\xampp\htdocs\jadwalPertandingan\private\resources\views/pagesAdmin/editJadwal.blade.php */ ?>
<?php $__env->startSection('main'); ?>
<div id="editJadwal">
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
                    <h5 class="card-header">Edit Jadwal Pertandingan</h5>
                     <div class="container">
                     <br>
                        <form action="<?php echo e(route('updateJadwal',$jadwal)); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label >Tim_1</label>
                                <input type="text" class="form-control" name='tim_1' value="<?php echo e($jadwal->tim_1); ?>" id="tim_1" placeholder="Tim 1" required oninvalid="this.setCustomValidity('Tim 1 Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="" disabled selected>
                            </div>
                            <div class="form-group">
                                <label >Tim_2</label>
                                <input type="text" class="form-control" name='tim_2' value="<?php echo e($jadwal->tim_2); ?>" id="tim_2" placeholder="Tim 2" required oninvalid="this.setCustomValidity('Tim 2 Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="" disabled selected>
                            </div>
                            <div class="form-group">
                                <label >Tanggal</label>
                                <input type="date" class="form-control" name='tanggal' value="<?php echo e($jadwal->tanggal); ?>" id="tanggal" placeholder="Tanggal" required oninvalid="this.setCustomValidity('Tanggal Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="" disabled selected>
                            </div>
                            <div class="form-group">
                                <label >Jam</label>
                                <input type="text" class="form-control" name='jam_tanding' value="<?php echo e($jadwal->jam_tanding); ?>" id="jam" placeholder="Jam" required oninvalid="this.setCustomValidity('Jam Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="" disabled selected>
                            </div>
                            <div class="form-group">
                                <label >Tempat</label>
                                <input type="text" class="form-control" name='tempat' value="<?php echo e($jadwal->tempat); ?>" id="tempat" placeholder="Tempat" required oninvalid="this.setCustomValidity('Tempat Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="" disabled selected>
                            </div>
                            <div class="form-group">
                                <label >Score</label>
                                <input type="text" class="form-control" name='score' value="<?php echo e($jadwal->score); ?>" id="score" placeholder="Score" required oninvalid="this.setCustomValidity('Score Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name='status' id="status" name="status" required oninvalid="this.setCustomValidity('Status Tidak Boleh Kosong')" oninput="setCustomValidity('')" >
                                <option value="menunggu" <?php if($jadwal->status == 'menunggu'): ?>selected <?php endif; ?>>Menunggu</option>
                                <option value="bertanding" <?php if($jadwal->status == 'bertanding'): ?>selected <?php endif; ?>>Bertanding</option>
                                <option value="selesai" <?php if($jadwal->status == 'selesai'): ?>selected <?php endif; ?>>Selesai</option>
                                </select> <br>
                            </div>
                            <button id="daftar" type="submit" class="btn btn-success">Edit Jadwal</button> 
                        </form>
                        <br>
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