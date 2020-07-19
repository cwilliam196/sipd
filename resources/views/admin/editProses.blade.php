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
<form method="POST" enctype="multipart/form-data">
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
          <label data-error="wrong" data-success="right" for="tempat">Tempat Penginapan</label>
          <input type="text" name="tempat" id="tempat" class="form-control validate" value="{{$request->tempat_penginapan}}" disabled>
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="harga">Biaya</label>
          <input type="text" name="harga" id="harga" class="form-control validate" value="{{$request->biaya }}" disabled>
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="tanggal_keberangkatan">Tanggal Keberangkatan</label>
          <input type="text" name="tanggal_keberangkatan" id="tanggal_keberangkatan" class="form-control validate" value="{{$request->tanggal_perjalanan}}" disabled>
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="tanggal_kembali">Tanggal Kembali</label>
          <input type="text" name="tanggal_kembali" id="tanggal_kembali" class="form-control validate" value="{{$request->tanggal_kembali}}" disabled>
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="lama_perjalanan">Lama Perjalanan</label>
          <input type="text" name="lama_perjalanan" id="lama_perjalanan" class="form-control validate" value="{{$request->lama_perjalanan}}" disabled>
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="images">Upload Scan</label>
          <input type="file" name="images" id="images" class="form-control validate">
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Proses Request</button>
      </div>

      </form>
</div>
</div>


	<!--//agileinfo-grap-->



@endsection
