<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saran;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPost = Saran::orderBy('created_at')->get();
        $rejects = Saran::where('status','ditolak')->get();
        $accs = Saran::where('status','diterima')->get();
        $new = Saran::where('status', 'baru')->get();
        return view('admin.Pesan.semuaPesan', compact('allPost', 'rejects', 'accs','new'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $saran = Saran::find($id);

        if ($saran->status == 'baru') {
            $saran->update(['status' => 'dibaca']);
        }
        return view('admin.Pesan.pesan', compact('saran'));
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
        // dd($request);
        Saran::find($id)->update(['status' => $request->status]);
        return redirect('admin/pesan'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Saran::find($id)->delete();
        return back();
    }

    public function histories(){
        return view('admin.Pesan.histories');
    }

    public function tolak($id){
        $saran = Saran::find($id);
        $saran->update(['status' => 'ditolak']);
        $sarans = Saran::all();

        return back();
    }
}
