{{-- File : home.blade.php, disimpan di views/pages --}}
@extends('template')

@section('main')
<div id="daftarPemain">
<br> 
<br> 
    <div class="container-fluid">
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="width: 34rem;">
                    <h5 class="card-header">Tambah Daftar Pemain</h5>
                     <div class="container">
                     <br>
                     <form class="" action="{{url('store3')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label >Nama Tim</label>
                                <select name="nama_tim" id="nama_tim" class="form-control">
                                <option value="">--Pilih tim--</option>
                                    @foreach($teams as $tim)
                                        <option value="{{ $tim->namaTim }}">{{$tim->namaTim}}</option>
                                    @endforeach
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
                        @foreach($daftarPemain as $daftarPemain)
                            <tr>
                            <td>{{$daftarPemain->nama_tim}}</td>
                            <td>{{$daftarPemain->nama_pemain}}</td>
                            <td>{{$daftarPemain->no_punggung}}</td>
                            <td class="text-center"> <a class="btn btn-primary btn-sm" href="pemain/{{$daftarPemain->id}}/editPemain">Edit</a>
                            <a class="btn btn-danger btn-sm" href="{{route('deletePemain',$daftarPemain)}}"onclick="return confirm('Yakin Anda ingin menghapus Data ini ?')">Hapus</a></td>
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