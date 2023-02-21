<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waka;
use App\Models\Bidang;

class BidangController extends Controller
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
        // dd($wakas);
        return view('admin.List.kategori', compact('wakas', 'bidangs'));
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
        return view('admin.Add.kategori', compact('wakas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $messages = [
        //     'required' => ':Mohon isi Field ini',
        //     'min' => ':Mohon isi dengan minimal :min karakter ',
        //     'max' => ':karakter yang dimasukan melebihin :max',
        //     'numeric' => ':Harap isi dengan huruf',
        //     'mimes' => ':format yang didukung jpg, jpeg, png, gif, dan svg',
        //     'size' => 'file yang diuplad maksimal :size '
        // ];
        // $this->validate($request,[
        //     "kategori" => 'required'
        // ],$messages);
        // ddd($request);
        Bidang::create([
            "waka_id" => $request->waka_id,
            "bidang" => $request->bidang
        ]);

        $waka = Waka::find($request->waka_id)->nama;
        // dd($waka);



        return redirect('/admin/bidang')->with('create', "Bidang '$request->bidang' Berhasil Dibuat untuk waka '$waka'");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bidangs = Bidang::all()->where('waka_id', $id);
        $waka = Waka::find($id);
        // dd($bidangs);
        return view('admin/List/bidangItem', compact('bidangs', 'waka'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bidangs = Bidang::all()->where('waka_id', $id);
        $waka = Waka::find($id);

        // dd($bidangs);
        return view('admin/crud/editBidang', compact('bidangs', 'waka'));
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
        $oldBidang = Bidang::find($id)->bidang;
        // var_dump($oldBidang);
        Bidang::find($id)->update($request->all());
        $newBidang = Bidang::find($id)->bidang;
        $bidang = Bidang::find($id);
        $waka = waka::find(Bidang::find($id)->waka_id);

        return redirect()->back()->with('update', "Bidang '$oldBidang' diubah menjadi '$newBidang' Dari waka '$waka->nama'");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oldBidang = Bidang::find($id)->bidang;
        Bidang::findorfail($id)->delete();

        return redirect()->back()->with('delete', "Bidang '$oldBidang' Berhasil Dihapus");
    }
}
