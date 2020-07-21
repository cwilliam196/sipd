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
      $dataMasuk = AdminRequest::all();
      $sorted = $dataMasuk->where('keterangan', 'Data Masuk');
      // dd($sorted);
      // $this->info('Display this on the screen');

      // \Log::info('Showing Requested Data: '.$sorted);
      error_log('======================================== MENAMPILKAN DATA YANG BARU DI REQUEST'.$sorted);
      return view('admin.dataMasuk', ['data_masuk' => $sorted]);
    }

    public function proses()
    {
      $dataProses = adminRequest::all();
      $sorted = $dataProses->where('keterangan', 'Data Proses');

      return view('admin.dataProses',['data_proses' => $sorted]);
    }

    public function selesai()
    {
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
        return view('admin.edit',['request'=>$adminRequest]);
    }

    public function editProses(AdminRequest $adminRequest)
    {
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

        $data=array(
          "keterangan"=>$updateKeterangan,
          "lama_perjalanan"=>$days,
          "tempat_penginapan"=>$penginapan,
          "tanggal_perjalanan"=>$keberangkatan,
          "tanggal_kembali"=>$kembali,
          "biaya"=>$harga);
          DB::table('request')->where('id_request',$id)->update($data);

        return redirect('/home/data_masuk')->with('Status', 'Data Berhasil di proses');
    }

    public function updateProses(Request $request, AdminRequest $adminRequest)
    {
        $id = $adminRequest->id_request;
        $updateKeterangan = 'Data Selesai';
        $images = $request->file('images')->store('images');
        // dd($images);
        $data=array(
          "images"=>$images,
          "keterangan"=>$updateKeterangan
        );
        DB::table('request')->where('id_request',$id)->update($data);


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
