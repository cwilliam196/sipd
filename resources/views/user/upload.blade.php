@extends('layout.userMain')

@section('title', 'Data Request')

@section('container')


<!--agileinfo-grap-->
<div class="agileinfo-grap">
<div class="agileits-box">
<header class="agileits-box-header clearfix">
<h3>Data Request</h3>
</header>
@if (session('Status'))
  <div class="alert alert-success">
    {{session('Status')}}
  </div>
@endif
<form method="POST" action="">
        @csrf

        <div class="modal-body mx-3">
          <div class="md-form mb-4">
            <label data-error="wrong" data-success="right" for="nik">Nomor Induk Karyawan</label>
            <input type="text" name="nik" id="nik" class="form-control validate" value="{{$request->nik}}" disabled>
          </div>

          <div class="md-form mb-4">
            <label data-error="wrong" data-success="right" for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control validate" value="{{$request->nama}}" disabled>
          </div>

          <div class="md-form mb-4">
            <label data-error="wrong" data-success="right" for="tujuan_dinas">Tujuan Dinas</label>
            <input type="text" name="tujuan_dinas" id="tujuan_dinas" class="form-control validate" value="{{$request->tujuan_dinas}}" disabled>
          </div>

          <div class="md-form mb-4">
            <label data-error="wrong" data-success="right" for="tempat">Tempat penginapan</label>
            <input type="text" name="tempat" id="tempat" class="form-control validate" value="{{$request->tempat}}" disabled>
          </div>

          <div class="md-form mb-4">
            <label data-error="wrong" data-success="right" for="harga">Biaya</label>
            <input type="text" name="harga" id="harga" class="form-control validate" value="{{$request->harga}}" disable>
          </div>

          <div class="md-form mb-4">
            <label data-error="wrong" data-success="right" for="tangal_keberangkatan">Tanggal Keberangkatan</label>
            <input type="date" name="tanggal_keberangkatan" id="tangal_keberangkatan" class="form-control validate" value="{{$request->tangal_keberangkatan}}" disable>
          </div>

          <div class="md-form mb-4">
            <label data-error="wrong" data-success="right" for="tanggal_kembali">Tanggal Kembali</label>
            <input type="date" name="tanggal_kembali" id="tanggalLahir" class="form-control validate" value="{{$request->tanggal_kembali}}" disable>
          </div>

      </form>
</div>
</div>


	<!--//agileinfo-grap-->



@endsection
