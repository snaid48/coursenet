<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Jabatan;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan = Jabatan::get();
        // $jabatan = Jabatan::withTrashed()->all();

        // $jabatan = Jabatan::withTrashed()->get();
        return view('jabatan.home',['data'=>$jabatan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jabatan.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_jabatan' => 'required|min:5|max:20',
        ]);


        Jabatan::create([
        'nama_jabatan' => $request->nama_jabatan
        ]);
        return redirect('/jabatan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jabatan = Jabatan::where('id',$id)->first();
        return view('jabatan.show',['data'=>$jabatan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabatan = Jabatan::where('id',$id)->first();
        return view('jabatan.edit',['data'=>$jabatan]);
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
        Jabatan::where('id', $request->id)
        ->update([
            'nama_jabatan' => $request->nama_jabatan
        ]);
        return redirect('/jabatan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $jabatan = Jabatan::findOrFail($id);
        $jabatan = Jabatan::where('id','=',$id);
        // praktik softdelete
        // penggunaan delete () dan destroy () sama saja
        $jabatan->delete();
        // Jabatan::destroy($id);

        // menghapus permanen dari database
        // $jabatan->forceDelete();
        
        
        return redirect('/jabatan');
    }
}
