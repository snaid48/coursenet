<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Karyawan;
// use Illuminate\Support\Facades\URL;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = DB::table('karyawan')->get();
        return view('karyawan.home',['data'=>$karyawan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Insert use query builder
        DB::table('karyawan')->insert(
            ['nama_karyawan' => $request->nama_karyawan,
             'alamat' => $request->alamat,
             'telepon' => $request->telepon,
             'jabatan' => $request->jabatan]
        );

        return redirect('/karyawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = DB::table('karyawan')->where('id',$id)->first();
        return view('karyawan.show',['data'=>$karyawan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = DB::table('karyawan')->where('id',$id)->first();
        return view('karyawan.edit',['data'=>$karyawan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // use Query Builder
        DB::table('karyawan')
            ->where('id', $request->id)
            ->update(['nama_karyawan' => $request->nama_karyawan,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'jabatan' => $request->jabatan]);


        return redirect('/karyawan');
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
