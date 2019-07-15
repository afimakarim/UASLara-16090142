<?php /* C:\xampp\htdocs\jadwalPertandingan\private\resources\views/pages/daftarTim.blade.php */ ?>
<?php $__env->startSection('main'); ?>
<div id="jadwal">
<br> 
<br> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 34rem;">
                    <h5 class="card-header">Tambah Daftar Tim</h5>
                     <div class="container">
                     <br>
                        <form>
                            <div class="form-group">
                                <label >ID Tim</label>
                                <input type="text" class="form-control" id="idTim" aria-describedby="idTim" placeholder="ID Tim">
                            </div>
                            <div class="form-group">
                                <label >Nama Tim</label>
                                <input type="text" class="form-control" id="namaTim" aria-describedby="namaTim" placeholder="Nama Tim">
                            </div>
                            <div class="form-group">
                                <label >Asal Desa</label>
                                <input type="text" class="form-control" id="asalDesa" placeholder="Asal Desa">
                            </div>  
                            <button id="daftar" type="submit" class="btn btn-success">Daftar Turnamen</button> 
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
                            <th scope="col" >ID Tim</th>
                            <th scope="col" >Nama Tim</th>
                            <th scope="col" >Asal Desa</th>
                            <th scope="col" >Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>012</td>
                            <td>Ghewor FC</td>
                            <td>Kaligangsa</td>
                            <td class="text-center"><a class="btn btn-primary btn-sm" href="#">Edit</a>
                            <a class="btn btn-danger btn-sm" href="#">Hapus</a></td>
                            </tr>
                            <tr>
                            <td>012</td>
                            <td>Tucen FC</td>
                            <td>Kaligangsa</td>
                            <td class="text-center"><a class="btn btn-primary btn-sm" href="#">Edit</a>
                            <a class="btn btn-danger btn-sm" href="#">Hapus</a></td>
                            </tr>
                            
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