<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.guru.index',[
            "guru" => User::all(),
        ]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.guru.create', [
            "guru" => User::all(),
        ]);
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
        // return $request;
        $validatedData = $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|email',
                'password' => 'required|min:5|max:255',
                'nik' => 'required',
                'tempat_lahir' => 'required',
                'tgl_lahir' => 'required',
                'jenis_kelamin' => 'required',
                'no_hp' => 'required',
                'nama_ibu' => 'required',
                'status_pegawai' => 'required',
                'pendidikan_terakhir' => 'required',
                // 'username' => 'required',
                // 'riwayat_keaktifan_id' => 'required',
                ]
            );


        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/guru')->with('pesan', 'Data Berhasil Ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = User::where('id', $id)->first();
        return view('admin.guru.show', [
            "guru" => $guru,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = User::where('id', $id)->first();
        return view('admin.guru.edit', [
            "guru" => $guru,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = User::find($id);
        $guru->delete();
        return redirect('/guru')->with('pesan', 'Data Berhasil Dihapus !');
    }
}
