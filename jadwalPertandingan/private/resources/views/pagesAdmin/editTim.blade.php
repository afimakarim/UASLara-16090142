{{-- File : home.blade.php, disimpan di views/pages --}}
@extends('template')

@section('main')
<div id="daftarTim">
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
                <div class="card" style="width: 104rem;">
                    <h5 class="card-header">Edit Daftar Tim</h5>
                     <div class="container">
                     <br>
                     <form class="" action="{{route('updateTim',$daftarTim)}}" method="post">
                     @csrf
                            <!-- <div class="form-group">
                                <label >ID Tim</label>
                                <input type="text" class="form-control" id="idTim" aria-describedby="idTim" placeholder="ID Tim">
                            </div> -->
                            <div class="form-group">
                                <label >Nama Tim</label>
                                <input type="text" class="form-control" name='namaTim' value="{{$daftarTim->namaTim}}" id="namaTim" aria-describedby="namaTim" placeholder="Nama Tim"required oninvalid="this.setCustomValidity('Nama Tim Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label >Asal Desa</label>
                                <input type="text" class="form-control" name='asal' value="{{$daftarTim->asal}}" id="asalDesa" placeholder="Asal Desa"required oninvalid="this.setCustomValidity('Asal Desa Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>  
                            <button id="daftar" type="submit" class="btn btn-success">Edit Tim</button> 
                        </form>
                    <br>
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