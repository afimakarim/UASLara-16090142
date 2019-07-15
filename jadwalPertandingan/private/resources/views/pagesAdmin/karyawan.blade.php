<!-- 
<div id='karyawan'>
    <h1> Passing Data Controller<h1>
    <p> Passing Data Controller ke View Laravel</p>
</div> 
-->

<p> Nama : {{$nama}} </p>

<p> Mengampu Mata Kuliah </p>
<ul>
    @foreach( $matkul as $m ) 
    <li>  {{$m}} </li>
    @endforeach
</ul>