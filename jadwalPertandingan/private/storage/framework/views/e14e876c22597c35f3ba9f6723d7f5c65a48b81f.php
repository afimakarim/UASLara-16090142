<?php /* C:\xampp\htdocs\jadwalPertandingan\private\resources\views/pages/daftarPemain.blade.php */ ?>
<?php $__env->startSection('main'); ?>
<div id="jadwal">
<br> 
<br> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 34rem;">
                    <h5 class="card-header">Tambah Daftar Pemain</h5>
                     <div class="container">
                     <br>
                        <form>
                            <div class="form-group">
                                <label >Nama Tim</label>
                                <select class="form-control" id="namaTim" name="namaTim" required>
                                    <option value="ghewor">Ghewor FC</option>
                                    <option value="tucen">Tucen FC</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Nama Pemain</label>
                                <input type="text" class="form-control" id="namaPemain" aria-describedby="namaPemain" placeholder="Nama Pemain">
                            </div>
                            <div class="form-group">
                                <label >No Punggung</label>
                                <input type="text" class="form-control" id="noPunggung" placeholder="No Punggung">
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
                            <tr>
                            <td>Ghewor FC</td>
                            <td>Firman Utina</td>
                            <td>10</td>
                            <td class="text-center"><a class="btn btn-primary btn-sm" href="#">Edit</a>
                            <a class="btn btn-danger btn-sm" href="#">Hapus</a></td>
                            </tr>
                            <tr>
                            <td>Ghewor FC</td>
                            <td>Evan Dimas</td>
                            <td>06</td>
                            <td class="text-center"><a class="btn btn-primary btn-sm" href="#">Edit</a>
                            <a class="btn btn-danger btn-sm" href="#">Hapus</a></td>
                            </tr>
                            <tr>
                            <td>Ghewor FC</td>
                            <td>Bambang Pamungkas</td>
                            <td>11</td>
                            <td class="text-center"><a class="btn btn-primary btn-sm" href="#">Edit</a>
                            <a class="btn btn-danger btn-sm" href="#">Hapus</a></td>
                            </tr>
                            <tr>
                            <td>Ghewor FC</td>
                            <td>Yanto Basna</td>
                            <td>07</td>
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