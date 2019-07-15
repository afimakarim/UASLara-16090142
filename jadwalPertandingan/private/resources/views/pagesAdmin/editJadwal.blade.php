{{-- File : home.blade.php, disimpan di views/pages --}}
@extends('template')

@section('main')
<div id="editJadwal">
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
                    <h5 class="card-header">Edit Jadwal Pertandingan</h5>
                     <div class="container">
                     <br>
                        <form action="{{route('updateJadwal',$jadwal)}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label >Tim_1</label>
                                <input type="text" class="form-control" name='tim_1' value="{{$jadwal->tim_1}}" id="tim_1" placeholder="Tim 1" required oninvalid="this.setCustomValidity('Tim 1 Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="" disabled selected>
                            </div>
                            <div class="form-group">
                                <label >Tim_2</label>
                                <input type="text" class="form-control" name='tim_2' value="{{$jadwal->tim_2}}" id="tim_2" placeholder="Tim 2" required oninvalid="this.setCustomValidity('Tim 2 Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="" disabled selected>
                            </div>
                            <div class="form-group">
                                <label >Tanggal</label>
                                <input type="date" class="form-control" name='tanggal' value="{{$jadwal->tanggal}}" id="tanggal" placeholder="Tanggal" required oninvalid="this.setCustomValidity('Tanggal Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="" disabled selected>
                            </div>
                            <div class="form-group">
                                <label >Jam</label>
                                <input type="text" class="form-control" name='jam_tanding' value="{{$jadwal->jam_tanding}}" id="jam" placeholder="Jam" required oninvalid="this.setCustomValidity('Jam Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="" disabled selected>
                            </div>
                            <div class="form-group">
                                <label >Tempat</label>
                                <input type="text" class="form-control" name='tempat' value="{{$jadwal->tempat}}" id="tempat" placeholder="Tempat" required oninvalid="this.setCustomValidity('Tempat Tidak Boleh Kosong')" oninput="setCustomValidity('')" value="" disabled selected>
                            </div>
                            <div class="form-group">
                                <label >Score</label>
                                <input type="text" class="form-control" name='score' value="{{$jadwal->score}}" id="score" placeholder="Score" required oninvalid="this.setCustomValidity('Score Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name='status' id="status" name="status" required oninvalid="this.setCustomValidity('Status Tidak Boleh Kosong')" oninput="setCustomValidity('')" >
                                <option value="menunggu" @if($jadwal->status == 'menunggu')selected @endif>Menunggu</option>
                                <option value="bertanding" @if($jadwal->status == 'bertanding')selected @endif>Bertanding</option>
                                <option value="selesai" @if($jadwal->status == 'selesai')selected @endif>Selesai</option>
                                </select> <br>
                            </div>
                            <button id="daftar" type="submit" class="btn btn-success">Edit Jadwal</button> 
                        </form>
                        <br>
                    </div>
                </div>
            </div>
@stop 

@section('footer')
<div id="footer">
    <p>&copy; 2019 | Framework Programming Poltek Tegal </p>
</div>
@stop