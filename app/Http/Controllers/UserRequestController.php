<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminRequest;
use Image;
use DateTime;
use DB;


class UserRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      // dd($sorted);
      // $this->info('Display this on the screen');

      // \Log::info('Showing Requested Data: '.$sorted);
      error_log('======================================== MENAMPILKAN DATA YANG BARU DI REQUEST');
      return view('user.requestData');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // return $request;
        $keterangan = 'Data Masuk';
        $nama = $request->nama;
        $nik = $request->nik;
        $tempat_penginapan = $request->tempat;
        $tujuan_dinas = $request->tujuan_dinas;
        $tanggal_keberangkatan = $request->tanggal_keberangkatan;
        $tanggal_kembali = $request->tanggal_kembali;
        $biaya =$request->harga;
        $images = 'Belum Upload Scan Dinas';
        //untuk menghitung total hari
        $dayK = new DateTime($tanggal_keberangkatan);
        $dayKem = new DateTime($tanggal_kembali);
        $interval =  $dayK->diff($dayKem);
        $days = $interval->format('%a hari');

        $data = array(
          'keterangan'=>$keterangan,
          'nama'=>$nama,
          'nik'=>$nik,
          'tujuan_dinas'=>$tujuan_dinas,
          'lama_perjalanan'=>$days,
          'tempat_penginapan'=>$tempat_penginapan,
          'tanggal_perjalanan'=>$tanggal_keberangkatan,
          'tanggal_kembali'=>$tanggal_kembali,
          'biaya'=>$biaya,
          'images'=>$images
        );

        DB::table('request')->insert($data);
        error_log('======================================== DATA TELAH BERHASIL DI REQUEST'.$request);
       return redirect()->back()->with('Status', 'Data Berhasil di Request');

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
