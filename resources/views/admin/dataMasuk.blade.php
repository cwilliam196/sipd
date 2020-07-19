@extends('layout.adminMain')

@section('title', 'Data Request')

@section('container')


<!--agileinfo-grap-->
<div class="agileinfo-grap">
<div class="agileits-box">
<header class="agileits-box-header clearfix">
<h3>Data Request</h3>
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
      @foreach ($data_masuk as $dm)
    <tr>

      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$dm->nik}}</td>
      <td>{{$dm->nama}}</td>
      <td>{{$dm->keterangan}}</td>
      <td>
      <a onclick="location.href='/home_admin/data_masuk/{{$dm->id_request}}/edit'" class="badge badge-success">edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
</div>


	<!--//agileinfo-grap-->



@endsection
