<?php

namespace App\Http\Controllers;

// use App\User;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    // /**
    //  * Show the profile for the given user.
    //  *
    //  * @param  int  $id
    //  * @return Response
    //  */
    // public function show($id)
    // {
    //     return view('user.profile', ['user' => User::findOrFail($id)]);
    // }

    public function index() {

        $total_karyawan = DB::table('karyawan')->count();
        $total_jabatan = DB::table('jabatan')->count();
        $total_departemen = DB::table('departemen')->count();
        $total_inventory = DB::table('inventory')->count();
        
        return view('home',['total_karyawan'=>$total_karyawan,
        'total_jabatan'=>$total_jabatan,
        'total_departemen'=>$total_departemen,
        'total_inventory'=>$total_inventory]);

        
        // return view('home');
    }
}