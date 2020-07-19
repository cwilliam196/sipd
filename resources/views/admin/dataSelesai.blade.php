@extends('layout.adminMain')

@section('title', 'Data Selesai')

@section('container')


<!--agileinfo-grap-->
<div class="agileinfo-grap">
<div class="agileits-box">
<header class="agileits-box-header clearfix">
<h3>Data Selesai Kartu Keluarga</h3>
</header>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($data_selesai as $ds)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$ds->nik}}</td>
      <td>{{$ds->nama}}</td>
      <td>{{$ds->keterangan}}</td>

    </tr>
      @endforeach
  </tbody>
</table>


</div>
</div>
	<!--//agileinfo-grap-->



@endsection
