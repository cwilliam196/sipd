<?php

namespace App\Http\Controllers;
// Created By Cornellius William
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function getLogin()
    {
        // menampilkan view login
        return view('login');
    }

    public function postLogin(Request $request)
    {
        // return \Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role'=> 1]);
        // dd(!\Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role'=> 1]));
        //memvalidasi apakah yang di input sesuai dengan database atau tidak dan validasi kedua yaitu apakah role yang login admin atau user(karyawan)
       if (!auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
           return redirect()->back()->with('status', 'Username atau Password anda salah!!');
       }elseif (auth()->attempt(['email' => $request->email, 'password' => $request->password, 'role' => "admin"])) {
         return redirect()->route('home_admin');
       }
       return redirect()->route('home_user');


       error_log('======================================== DATA MASUK KEDALAM LOGIN');

    }

    public function logout()
    {
        // fungsi untuk logout dengan menyimpan token
        auth()->logout();
        error_log('======================================== DATA BERHASIL LOGOUT');

        return redirect()->route('login');
    }
}
