<?php /* C:\xampp\htdocs\jadwalPertandingan\private\resources\views/pagesAdmin/edit.blade.php */ ?>
<?php $__env->startSection('main'); ?>
<div id="jadwal">
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
                    <h5 class="card-header">Tambah Jadwal Pertandingan</h5>
                     <div class="container">
                     <br>
                        <form class="" action="<?php echo e(url('store')); ?>" method="post">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label >Nama Tim 1</label>
                                <select class="form-control" name='tim_1'id="namaTim" name="namaTim" required>
                                    <option value="ghewor">Ghewor FC</option>
                                    <option value="tucen">Tucen FC</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Nama Tim 2</label>
                                <select class="form-control" name='tim_2' id="namaTim" name="namaTim" required>
                                    <option value="ghewor">Ghewor FC</option>
                                    <option value="tucen">Tucen FC</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Tanggal</label>
                                <input type="date" class="form-control" name='tanggal' id="tanggal" placeholder="Tanggal" required oninvalid="this.setCustomValidity('Tanggal Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label >Jam</label>
                                <input type="text" class="form-control" name='jam_tanding' id="jam" placeholder="Jam" required oninvalid="this.setCustomValidity('Jam Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label >Tempat</label>
                                <input type="text" class="form-control" name='tempat' id="tempat" placeholder="Tempat" required oninvalid="this.setCustomValidity('Tempat Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label >Score</label>
                                <input type="text" class="form-control" name='score' id="score" placeholder="Score" required oninvalid="this.setCustomValidity('Score Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name='status' id="status" name="status" required oninvalid="this.setCustomValidity('Status Tidak Boleh Kosong')" oninput="setCustomValidity('')" >
                                    <option value="1">Menunggu</option>
                                    <option value="2">Bertanding</option>
                                    <option value="3">Selesai</option>
                                </select> <br>
                            </div>
                            <button id="daftar" type="submit" class="btn btn-success">Tambah Jadwal</button> 
                        </form>
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