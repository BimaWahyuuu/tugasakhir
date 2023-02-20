<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waka;
use Redirect,Response;
use File;
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
        $this->validate($request,[
            'nama' => 'required|min:5|max:20',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png,gif,svg'
        ],$messages);
        // dd($errors);
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
        $user = Waka::find($id);
        return Response::json($user);
        // dd($user);
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
        // ddd($request);
        // $messages = [
        //     'required' => ':Mohon isi Field ini',
        //     'min' => ':Mohon isi dengan minimal :min karakter ',
        //     'max' => ':karakter yang dimasukan melebihin :max',
        //     'numeric' => ':Harap isi dengan huruf',
        //     'mimes' => ':format yang didukung jpg, jpeg, png, gif, dan svg',
        //     'size' => 'file yang diuplad maksimal :size '
        // ];
        // $this->validate($request,[
        //     'nama' => 'required|min:5|max:20',
        //     'jenis_kelamin' => 'required',
        //     'jabatan' => 'required',
        //     'foto' => 'required|mimes:jpg,jpeg,png,gif,svg'
        // ],$messages);
        // if ($request->foto != '') {
            // $old = Waka::find($id);
            // file::delete(asset('/storage'.$old->foto));

            // $foto = $request->file('foto')->store('images');
            $waka = Waka::find($id);
            $waka->nama = $request->nama;
            $waka->jabatan = $request->jabatan;
            // $waka->foto = $foto;
            $waka->save();
            // ddd($waka);
            return redirect('/admin/waka')->with('status', 'Data Waka Berhasil Diupdate');
        // }else{
        //     $waka = Waka::find($id);
        //     $waka->nama = $request->nama;
        //     $waka->jabatan = $request->jabatan;
        //     $waka->save();
        //     ddd($waka);
        // };
        
        $foto =  $request->file('foto')->store('images');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $waka = Waka::find($id);
        $waka->delete();
        return redirect('/admin/waka')->with('status', 'Data waka '.$waka->nama.' berhail dihapus');
    }
    // public function hapus($id)
    // {
    //     $waka = Waka::find($id);
    //     $waka->delete();
    //     return redirect('/admin/waka')->with('status', 'Data waka '.$waka->nama.' berhail dihapus');
    // }
}