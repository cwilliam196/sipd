<?php

namespace App\Http\Controllers;
// Created By Cornellius William
use App\AdminRequest;
use Illuminate\Http\Request;
use Image;
use DateTime;
use DB;

class AdminRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // mengambil dari table request yang keteranganya data masuk
      $dataMasuk = AdminRequest::all();
      $sorted = $dataMasuk->where('keterangan', 'Data Masuk');
      // dd($sorted);
      // $this->info('Display this on the screen');

      // \Log::info('Showing Requested Data: '.$sorted);
      error_log('======================================== MENAMPILKAN DATA YANG BARU DI REQUEST'.$sorted);
      // $sorted berfungsi untuk menampilkan hasil data keterangan kedalam view
      return view('admin.dataMasuk', ['data_masuk' => $sorted]);
    }

    public function proses()
    {
      // mengambil table request yang keteranganya data proses
      $dataProses = adminRequest::all();
      $sorted = $dataProses->where('keterangan', 'Data Proses');

      return view('admin.dataProses',['data_proses' => $sorted]);
    }

    public function selesai()
    {
      // mengambil table request yang keteranganya data selesai
      $dataSelesai = adminRequest::all();
      $sorted = $dataSelesai->where('keterangan', 'Data Selesai');

      return view('admin.dataSelesai',['data_selesai' => $sorted]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdminRequest  $adminRequest
     * @return \Illuminate\Http\Response
     */
    public function show(AdminRequest $adminRequest,Request $request)
    {
        // return $request;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminRequest  $adminRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminRequest $adminRequest)
    {
      // untuk menampilkan form update ke proses diurutkan sesuai ID yang di sort
        return view('admin.edit',['request'=>$adminRequest]);
    }

    public function editProses(AdminRequest $adminRequest)
    {
        // untuk menampilkan form update ke selesai diurutkan sesuai ID yang di sort
        return view('admin.editProses',['request'=>$adminRequest]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminRequest  $adminRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminRequest $adminRequest)
    {

        $id = $adminRequest->id_request;
        //data penginapan
        $penginapan = $request->tempat;
        //data harga
        $harga = $request->harga;
        //data keberangkatan
        $keberangkatan = $request->tanggal_keberangkatan;
        //data Kembali
        $kembali = $request->tanggal_kembali;
        //
        $updateKeterangan = 'Data Proses';
        //untuk menghitung total hari
        $dayK = new DateTime($keberangkatan);
        $dayKem = new DateTime($kembali);
        $interval =  $dayK->diff($dayKem);
        $days = $interval->format('%a hari');
        // fungsi untuk menyimpen data sementara bersifat spesifik yang diambil dari request
        $data=array(
          "keterangan"=>$updateKeterangan,
          "lama_perjalanan"=>$days,
          "tempat_penginapan"=>$penginapan,
          "tanggal_perjalanan"=>$keberangkatan,
          "tanggal_kembali"=>$kembali,
          "biaya"=>$harga);
          // untuk input kedalam databasenya
          DB::table('request')->where('id_request',$id)->update($data);
          // jika sudah diproses maka diarahkan kembali dengan status
        return redirect('/home/data_masuk')->with('Status', 'Data Berhasil di proses');
    }

    public function updateProses(Request $request, AdminRequest $adminRequest)
    {
        // untuk mengambil id_request
        $id = $adminRequest->id_request;
        // membuat keterangan baru dengan data selesai
        $updateKeterangan = 'Data Selesai';
        // data scan yang berupa photo disimpan kedalam store penyimpanan internal project
        $images = $request->file('images')->store('images');
        // dd($images);
        // menyimpan data sementara secara spesifik yang akan di inputkan kedalam database
        $data=array(
          "images"=>$images,
          "keterangan"=>$updateKeterangan
        );
        // proses update kedalam database dengan record dari data yang sudah dibuat
        DB::table('request')->where('id_request',$id)->update($data);

        // dan diarahkan kembali dengan penampilan status
        return redirect('/home/data_proses')->with('Status', 'Data Berhasil diselesaikan');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminRequest  $adminRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminRequest $adminRequest)
    {
        //
    }
}
