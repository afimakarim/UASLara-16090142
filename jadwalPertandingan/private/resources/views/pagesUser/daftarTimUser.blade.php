{{-- File : home.blade.php, disimpan di views/pages --}}
@extends('templateUser')

@section('main')
<br>
    <div class="card">
        <h5 class="card-header">Daftar Pemain</h5>
        <div class="card-body">
        <table class="table table-bordered text-center">
        <thead>
        <thead>
            <tr>
            <th scope="col" >Nama Tim</th>
            <th scope="col" >Nama Pemain</th>
            <th scope="col" >No Punggung</th>
            </tr>
        </thead>
        <tbody>
        @foreach($daftarPemain as $daftarPemain)
            <tr>
            <td>{{$daftarPemain->nama_tim}}</td>
            <td>{{$daftarPemain->nama_pemain}}</td>
            <td>{{$daftarPemain->no_punggung}}</td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
</div>
@stop 

@section('footer')
<div id="footer">
    <p>&copy; 2019 | Framework Programming Poltek Tegal </p>
</div>
@stop