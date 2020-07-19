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
          <input type="text" name="nik" id="nik" class="form-control validate" required>
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="nama">Nama</label>
          <input type="text" name="nama" id="nama" class="form-control validate" required>
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="tujuan_dinas">Tujuan Dinas</label>
          <input type="text" name="tujuan_dinas" id="tujuan_dinas" class="form-control validate" required>
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="tempat">Tempat penginapan</label>
          <select id="tempat" name="tempat">
            <option value="-----">-----</option>
            <option value="aston">Aston</option>
            <option value="ibis">Ibis Hotel</option>
          </select>
          {{-- <input type="text" name="alamat" id="alamat" class="form-control validate" required> --}}
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="harga">Biaya</label>
          <select id="harga" name="harga">
            <option value="">-----</option>
            <option value="5000000">Rp. 5.000.000</option>
            <option value="4500000">Rp. 4.500.000</option>
            <option value="4000000">Rp. 4.000.000</option>
            <option value="3500000">Rp. 3.500.000</option>
            <option value="3000000">Rp. 3.000.000</option>
            <option value="2500000">Rp. 2.500.000</option>
            <option value="2000000">Rp. 2.000.000</option>
            <option value="1500000">Rp. 1.500.000</option>
            <option value="500000">Rp. 500.000</option>
          </select>
          {{-- <input type="text" name="alamat" id="alamat" class="form-control validate" required> --}}
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="tangal_keberangkatan">Tanggal Keberangkatan</label>
          <input type="date" name="tanggal_keberangkatan" id="tangal_keberangkatan" class="form-control validate" required>
        </div>

        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="tanggalLahir">Tanggal Kembali</label>
          <input type="date" name="tanggal_kembali" id="tanggalLahir" class="form-control validate" required>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-default">Request Dinas</button>
      </div>

      </form>
</div>
</div>


	<!--//agileinfo-grap-->



@endsection
