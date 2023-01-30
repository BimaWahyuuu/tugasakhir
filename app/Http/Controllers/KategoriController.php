<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waka;
use App\Models\Bidang;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.List.kategori');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wakas = Waka::all();
        // dd($wakas);
        return view('admin.Add.kategori',compact('wakas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Mohon isi Field ini',
            'min' => ':Mohon isi dengan minimal :min karakter ',
            'max' => ':karakter yang dimasukan melebihin :max',
            'numeric' => ':Harap isi dengan huruf',
            'mimes' => ':format yang didukung jpg, jpeg, png, gif, dan svg',
            'size' => 'file yang diuplad maksimal :size '
        ];
        $this->validate($request,[
            "kategori" => 'required'
        ],$messages);



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
