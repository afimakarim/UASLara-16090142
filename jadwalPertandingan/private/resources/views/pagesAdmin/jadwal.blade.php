{{-- File : home.blade.php, disimpan di views/pages --}}
@extends('template')

@section('main')
<div id="jadwal">
<br> 
<br> 
    <div class="container-fluid">
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
    @endif
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 34rem;">
                    <h5 class="card-header">Tambah Jadwal Pertandingan</h5>
                     <div class="container">
                     <br>
                        <form class="" action="{{url('store')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label >Nama Tim 1</label>
                                <select name="tim_1" id="tim_1" class="form-control">
                                    <option value="">--Pilih tim--</option>
                                    @foreach($teams as $tim)
                                        <option value="{{ $tim->namaTim }}">{{$tim->namaTim}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Nama Tim 2</label>
                                <select name="tim_2" id="tim_2" class="form-control">
                                    <option value="">--Pilih tim--</option>
                                    @foreach($teams as $tim)
                                        <option value="{{ $tim->namaTim }}">{{$tim->namaTim}}</option>
                                    @endforeach
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
                                    <option value="menunggu">Menunggu</option>
                                    <option value="bertanding">Bertanding</option>
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
                            <th scope="col" >Tempat Tanding</th>
                            <th scope="col" >Status</th>
                            <th scope="col" >Pilihan</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        @foreach($jadwalPertandingan as $jadwalPertandingan)
                            <tr>
                            <td>{{$jadwalPertandingan->tim_1}}</td>
                            <td>{{$jadwalPertandingan->tim_2}}</td>
                            <td>{{$jadwalPertandingan->score}}</td>
                            <td>{{$jadwalPertandingan->tanggal}}</td>
                            <td>{{$jadwalPertandingan->jam_tanding}}</td>
                            <td>{{$jadwalPertandingan->tempat}}</td>
                            <td>{{$jadwalPertandingan->status}}</td>
                            <td class="text-center"><a class="btn btn-primary btn-sm" href="admin/{{$jadwalPertandingan->id}}/editJadwal">Edit</a>
                            <a class="btn btn-danger btn-sm" href="{{route('deleteJadwal',$jadwalPertandingan)}}" onclick="return confirm('Yakin Anda ingin menghapus Data ini ?')">Hapus</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
     </div>
     
</div>
@stop 

@section('footer')
<div id="footer">
    <p>&copy; 2019 | Framework Programming Poltek Tegal </p>
</div>
@stop