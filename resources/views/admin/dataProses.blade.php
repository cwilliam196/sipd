@extends('layout.adminMain')

@section('title', 'Data Proses')

@section('container')


<!--agileinfo-grap-->
<div class="agileinfo-grap">
<div class="agileits-box">
<header class="agileits-box-header clearfix">
<h3>Data Proses Kartu Keluarga</h3>
</header>
@if (session('status'))
  <div class="alert alert-success">
    {{session('status')}}
  </div>
@endif
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($data_proses as $pr)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$pr->nik}}</td>
      <td>{{$pr->nama}}</td>
      <td>{{$pr->keterangan}}</td>
      <td>
          <a onclick="location.href='/home_admin/data_proses/{{$pr->id_request}}/edit'" class="badge badge-success">Edit</a>
      </td>
    </tr>
      @endforeach
  </tbody>
</table>


</div>
</div>
	<!--//agileinfo-grap-->



@endsection
