<?php /* C:\xampp\htdocs\jadwalPertandingan\private\resources\views/pages/jadwal.blade.php */ ?>
<?php $__env->startSection('main'); ?>
<div id="jadwal">
<br> 
<br> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 34rem;">
                    <h5 class="card-header">Tambah Jadwal Pertandingan</h5>
                     <div class="container">
                     <br>
                        <form>
                            <div class="form-group">
                                <label >Nama Tim 1</label>
                                <input type="text" class="form-control" id="namaTim1" aria-describedby="namaTim1" placeholder="Nama Tim 1">
                            </div>
                            <div class="form-group">
                                <label >Nama Tim 2</label>
                                <input type="text" class="form-control" id="namaTim2" aria-describedby="namaTim2" placeholder="Nama Tim 2">
                            </div>
                            <div class="form-group">
                                <label >Tanggal</label>
                                <input type="date" class="form-control" id="tanggal" placeholder="Tanggal">
                            </div>
                            <div class="form-group">
                                <label >Jam</label>
                                <input type="text" class="form-control" id="jam" placeholder="jam">
                            </div>
                            <div class="form-group">
                                <label >Score</label>
                                <input type="text" class="form-control" id="score" placeholder="score">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="menuggu">Menunggu</option>
                                    <option value="sedang">Sedang</option>
                                    <option value="selesai">Selesai</option>
                                </select> <br>
                            </div>
                            <button id="daftar" type="submit" class="btn btn-success">Tambah Jadwal</button> 
                        </form>
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="card">
                    <h5 class="card-header">Jadwal Pertandingan</h5>
                    <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                            <th scope="col" >Nama Tim 1</th>
                            <th scope="col" >Score</th>
                            <th scope="col" >Nama Tim 2</th>
                            <th scope="col" >Tanggal</th>
                            <th scope="col" >Jam Tanding</th>
                            <th scope="col" >Status</th>
                            <th scope="col" >Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>Ghewor FC</td>
                            <td>1 - 0</td>
                            <td>Tucen FC</td>
                            <td>27-04-2019</td>
                            <td>09:00</td>
                            <td>Selesai</td>
                            <td class="text-center"><a class="btn btn-primary btn-sm" href="#">Edit</a>
                            <a class="btn btn-danger btn-sm" href="#">Hapus</a></td>
                            </tr>
                            <tr>
                            <td>Duren FC</td>
                            <td>1 - 2</td>
                            <td>Gedang FC</td>
                            <td>28-04-2019</td>
                            <td>14:00</td>
                            <td>Sedang</td>
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