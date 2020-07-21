<?php

namespace App\Http\Controllers;
// Created By Cornellius William
use Illuminate\Http\Request;
use App\User;
use Image;
use DB;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        error_log('======================================== MENAMPILKAN HALAMAN HOME ADMIN');
        //mencari table request dengan keterangan data masuk dan dihitung jumlah total data yang di proses
        $dataMasuk = DB::table('request')->get();
        $data = $dataMasuk->where('keterangan', 'Data Masuk');
        $allMasuk = $dataMasuk->count();
        $countMasuk = $data->count();
        // return $count;

        //mencari table request dengan keterangan data proses dan dihitung jumlah total data yang di proses
        $dataProses = DB::table('request')->get();
        $prosesData = $dataProses->where('keterangan', 'Data Proses');
        $allProses = $dataProses->count();
        $countProses = $prosesData->count();
        // mencari database request dengan semua keterangan dan dihitung jumlah total datanya
        $allDataInOut = DB::table('request')->get();
        $allData = $allDataInOut->count();

        // return $data;
        return view('admin.home',['data_masuk'=>$countMasuk, 'data_proses'=>$countProses, 'total_data'=>$allData]);
        //['ktp' => $count,'allKtp' =>$allKtp, 'allAkta' =>$allAkta, 'allKk' =>$allKk, 'kk'=>$countKk, 'akta'=>$countAkta]
    }

    public function edit()
    {
       // dd(\Auth::user());
       error_log('======================================== MENAMPILKAN FORM PROFILE');
       //menampilkan tampilan profile di admin
        return view('admin.profile');
    }

    public function update(User $user, Request $request)
    {
        //untuk tambahan jika dibutuhkan hass password
        $token =  $request->password;
        $id =  User::all()->where('id', $token);
        $hass = MD5($token);
        $pass = User::all('password');

        // $pass = $id->password;
        // return $pass;
        // dd(!\auth()->attempt(['remember_token' => $request->_token, 'password' => $request->password]));
        //mengambil data yang login secara spesifik untuk di update
        $images = $request->file('images')->store('images');
        $email = $request->email;
        $name = $request->name;
        $password = $request->password;
        //proses update data yang baru diubah
        $request->user()->update([
            'images' => $images,
            'name' => $name,
            'email' => $email,
            'password' => MD5($password)
        ]);
        error_log('======================================== PROFILE BERHASIL DI UPDATE'.$request);
        // jika sudah diupdate maka di arahkan kembali ke bagian form update dengan menampilkan status
        return redirect()->back()->with('status', 'Data Berhasil Di Update');

    }


}
