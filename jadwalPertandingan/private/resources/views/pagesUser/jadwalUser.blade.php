@extends('templateuser')
@section('main')
<div id="jadwal">
<br> 
<br> 
<div class="container-fluid">
    <form class="" action="{{url('store')}}" method="post">
        {{ csrf_field() }}
    <div class="row">
    @foreach($jadwalPertandingan as $jadwalPertandingan)
            <div class="col-sm-3" >
                <div style="padding: 0px 0px 15px 0px ;">
                    <div class="card text-center" >
                        <div class="card-header">
                            <h2>{{$jadwalPertandingan->tanggal}}</h2>
                        </div>
                        <div class="card-body">
                            <p class="card-title">{{$jadwalPertandingan->status}}</p>
                            <h3 class="card-text">{{$jadwalPertandingan->tim_1}} vs {{$jadwalPertandingan->tim_2}}</h3> 
                            <p class="card-title">{{$jadwalPertandingan->tempat}}</p>
                            <h3 class="card-title">{{$jadwalPertandingan->jam_tanding}}</h3>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
    </div>
</div>

@stop 

@section('footer')
<div id="footer">
    <p>&copy; 2019 | Framework Programming Poltek Tegal </p>
</div>
@stop