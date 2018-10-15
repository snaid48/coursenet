<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Arsip;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arsip = Arsip::get();
        return view('arsip.home',['data'=>$arsip]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('arsip.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Arsip::create([
            'nama_arsip' => $request->nama_arsip
            ]);
            return redirect('/arsip');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $arsip = Arsip::where('id',$id)->first();
        return view('arsip.show',['data'=>$arsip]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $arsip = Arsip::where('id',$id)->first();
        return view('arsip.edit',['data'=>$arsip]);
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
        Arsip::where('id', $request->id)
        ->update([
            'nama_arsip' => $request->nama_arsip
        ]);
        return redirect('/arsip');
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
