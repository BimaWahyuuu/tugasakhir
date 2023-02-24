<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Redirect,Response;
use Illuminate\Support\Facades\Storage;
use App\Models\Waka;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderByDesc('created_at')->get();
        $wakas = Waka::all();
        return view('admin.Dashboard.admin', compact('users','wakas'));

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
        $foto =  $request->file('foto')->store('images');
        // $user = User::create($request->all());
        if ($request->role == "admin") {
            print("halooo");
            $jabatan = "admin";
        }elseif ($request->role == "super admin") {
            $jabatan = "super admin";
        }else{
            $jabatan = $request->jabatan;
        }
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "role" => $request->role,
            "foto" => $foto,
            "jabatan" => $jabatan
        ]);
        return back()->with('create' ,"User baru $user->name berhasil dibuat dengan role $user->role");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return Response::json($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return Response::json($user);
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
        $user = User::find($id);
        if ($request->foto != '') {
        $newfoto =  $request->file('foto')->store('images');
        $oldfoto = $user->foto;
        Storage::delete($oldfoto);
        $user->foto = $newfoto;
        }
        if ($request->role == "admin") {
        $jabatan = "admin";
        // dd($user->jabatan);
        }elseif ($request->role == "super admin") {
            $jabatan = "super admin";
        }else{
            $jabatan = $request->jabatan;
        }
        // dump($request);
        // dd($jabatan);
        $user->jabatan = $jabatan;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->save();

        return back()->with('edit', "data berhasil di update");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return back()->with('delete', "data berhasil di hapus");
    }
}
