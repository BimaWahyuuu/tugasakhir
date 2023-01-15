<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waka;

class WakaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wakas = Waka::all();
        // ddd($wakas);
        return view('admin.List.waka', compact('wakas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.Add.waka');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd($request);
        $messages = [
            'required' => ':Mohon isi Field ini',
            'min' => ':Mohon isi dengan minimal :min karakter ',
            'max' => ':karakter yang dimasukan melebihin :max',
            'numeric' => ':Harap isi dengan huruf',
            'mimes' => ':format yang didukung jpg, jpeg, png, gif, dan svg',
            'size' => 'file yang diuplad maksimal :size '
        ];
        // $this->validate($request,[
        //     'nama' => 'required|min:5|max:20',
        //     'jenis_kelamin' => 'required',
        //     'jabatan' => 'required',
        //     'foto' => 'required|mimes:jpg,jpeg,png,gif,svg'
        // ],$messages);
        $foto =  $request->file('foto')->store('images');
        // ddd($foto);
        Waka::create([
            "nama" => $request->nama,
            "jenis_kelamin" => $request->jenis_kelamin,
            "jabatan" => $request->jabatan,
            "foto" => $foto
        ]);
        return redirect('/admin/waka')->with('status','Data WAKA berhasil dibuat');
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