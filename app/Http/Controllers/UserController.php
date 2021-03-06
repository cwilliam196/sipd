<?php

namespace App\Http\Controllers;
// Created By Cornellius William
use Illuminate\Http\Request;
use App\User;
use Image;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      error_log('======================================== MENAMPILKAN HALAMAN HOME USER');
      $dataMasuk = DB::table('request')->get();
      $data = $dataMasuk->where('keterangan', 'Data Masuk');
      $allMasuk = $dataMasuk->count();
      $countMasuk = $data->count();
      // return $count;


      $dataProses = DB::table('request')->get();
      $prosesData = $dataProses->where('keterangan', 'Data Proses');
      $allProses = $dataProses->count();
      $countProses = $prosesData->count();

      $allDataInOut = DB::table('request')->get();
      $allData = $allDataInOut->count();

      // return $data;
      return view('user.home',['data_masuk'=>$countMasuk, 'data_proses'=>$countProses, 'total_data'=>$allData]);
    }


    public function edit()
    {
      error_log('======================================== MENAMPILKAN FORM PROFILE');
       return view('user.profile');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, Request $request)
    {
      $token =  $request->password;
      // $id =  User::all()->where('id', $token);
      $hass = MD5($token);
      $pass = User::all('password');

      // $pass = $id->password;
      // return $pass;
      // dd(!\auth()->attempt(['remember_token' => $request->_token, 'password' => $request->password]));
      $images = $request->file('images')->store('images');
      $email = $request->email;
      $name = $request->name;
      $password = $request->password;
      $request->user()->update([
          'images' => $images,
          'name' => $name,
          'email' => $email,
          'password' => MD5($password)
      ]);
      error_log('======================================== PROFILE BERHASIL DI UPDATE'.$request);
      return redirect()->back()->with('status', 'Data Berhasil Di Update');
    }



}
