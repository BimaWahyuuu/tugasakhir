<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waka;
use App\Models\Bidang;
use App\Models\Saran;
use Redirect,Response;

class SaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wakas = Waka::all();
        $bidangs = Bidang::all();
        return view ('user.saran', compact('wakas','bidangs'));

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
        // dd($request);
        Saran::create([    
            'tiket'=> '7VS79G2VSB2O179GS',
            'nisornip' => $request->nisornip,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'deskripsi' => $request->deskripsi,
            'foto' => 'wahyudi.jpg',
            // 'waka_id' => $request->waka_id,
            'bidang_id'=> 1,
            'status' => 'baru'
        ]);
        return redirect ('/home');
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
        $bidang = Bidang::where('waka_id',$id)->get();
        return Response::json($bidang);
        dd($bidang);
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
