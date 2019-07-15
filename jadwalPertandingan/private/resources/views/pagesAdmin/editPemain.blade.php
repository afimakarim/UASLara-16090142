{{-- File : home.blade.php, disimpan di views/pages --}}
@extends('template')

@section('main')
<div id="editPemain">
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
                <div class="card" style="width: 104em;">
                    <h5 class="card-header">Edit Daftar Pemain</h5>
                     <div class="container">
                     <br>
                     <form class="" action="{{route('updatePemain',$daftarPemain)}}" method="post">
                             @csrf
                            <div class="form-group">
                                <label >Nama Tim</label>
                                <input type="text" class="form-control" name='nama_tim' value="{{$daftarPemain->nama_tim}}" id="nama_tim" placeholder="Nama Tim" required oninvalid="this.setCustomValidity('Nama Tim Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="" disabled selected>
                            </div>
                            <div class="form-group">
                                <label >Nama Pemain</label>
                                <input type="text" name="nama_pemain" value="{{$daftarPemain->nama_pemain}}" class="form-control" id="nama_pemain" aria-describedby="nama_pemain" placeholder="Nama Pemain"required oninvalid="this.setCustomValidity('Nama Pemain Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label >No Punggung</label>
                                <input type="text" name="no_punggung" value="{{$daftarPemain->no_punggung}}" class="form-control" id="no_punggung" placeholder="No Punggung"required oninvalid="this.setCustomValidity('No Punggung Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>  
                            <button id="daftar" type="submit" class="btn btn-success">Edit Pemain</button> 
                        </form>
                        <br>
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