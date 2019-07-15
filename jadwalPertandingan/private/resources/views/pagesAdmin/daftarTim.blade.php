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
                <div class="card" style="width: 34rem;">
                    <h5 class="card-header">Tambah Daftar Tim</h5>
                     <div class="container">
                     <br>
                     <form class="" action="{{url('store2')}}" method="post">
                            {{ csrf_field() }}
                            <!-- <div class="form-group">
                                <label >ID Tim</label>
                                <input type="text" class="form-control" id="idTim" aria-describedby="idTim" placeholder="ID Tim">
                            </div> -->
                            <div class="form-group">
                                <label >Nama Tim</label>
                                <input type="text" class="form-control" name='namaTim' id="namaTim"  placeholder="Nama Tim" required oninvalid="this.setCustomValidity('Nama Tim Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                
                            </div>
                            <div class="form-group">
                                <label >Asal Desa</label>
                                <input type="text" class="form-control" name='asal' id="asalDesa" placeholder="Asal Desa"required oninvalid="this.setCustomValidity('Asal Desa Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>  
                            <button id="daftar" type="submit" class="btn btn-success">Tambah Tim</button> 
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
                            <!-- <th scope="col" >ID Tim</th> -->
                            <th scope="col" >Nama Tim</th>
                            <th scope="col" >Asal Desa</th>
                            <th scope="col" >Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($daftarTim as $daftarTim)
                            <tr>
                            <!-- <td>012</td> -->
                            <td>{{$daftarTim->namaTim}}</td>
                            <td>{{$daftarTim->asal}}</td>
                            <td class="text-center"><a class="btn btn-primary btn-sm" href="tim/{{$daftarTim->id}}/editTim">Edit</a>
                            <a class="btn btn-danger btn-sm" href="{{route('deleteTim',$daftarTim)}}"onclick="return confirm('Yakin Anda ingin menghapus Data ini ?')">Hapus</a></td>
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