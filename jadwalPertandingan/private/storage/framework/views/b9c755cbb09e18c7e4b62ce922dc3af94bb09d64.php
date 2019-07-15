<?php /* C:\xampp\htdocs\jadwalPertandingan\private\resources\views/pagesAdmin/pengaturan.blade.php */ ?>
<?php $__env->startSection('main'); ?>
<br>
<br>
<div id="pengaturan">
<div class="container-fluid">   
            <div class="col-sm-5">
                <div class="card" style="width: 102rem;">
                    <h5 class="card-header">Ganti Password</h5>
                     <div class="container">
                     <br>
                        <form>
                            <div class="form-group">
                                <label >Password Lama</label>
                                <input type="text" class="form-control" id="passswordLama" aria-describedby="namaPemain" placeholder="Password Lama">
                            </div>
                            <div class="form-group">
                                <label >Password Baru</label>
                                <input type="text" class="form-control" id="passwordBaru" aria-describedby="namaPemain" placeholder="Password Baru">
                            </div>
                            <div class="form-group">
                                <label >Konfirmasi Password</label>
                                <input type="text" class="form-control" id="konfirmasiPassword" placeholder="Konfirmasi Password">
                            </div>  
                            <button id="gantiPassword" type="submit" class="btn btn-success">Ganti Password</button> 
                        </form>
                        <br>
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