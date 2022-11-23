<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->name;
        return view('profile', compact('user'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $guru = $request->user();
        return view('profile', compact('guru'));
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
        $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required|email',
                'password' => 'sometimes|nullable',
                'nik' => 'sometimes|nullable',
                'tempat_lahir' => 'sometimes|nullable',
                'tgl_lahir' => 'sometimes|nullable',
                'jenis_kelamin' => 'sometimes|nullable',
                'no_hp' => 'sometimes|nullable',
                'nama_ibu' => 'sometimes|nullable',
                'status_pegawai' => 'sometimes|nullable',
                'pendidikan_terakhir' => 'sometimes|nullable',
                // 'username' => 'required',
                // 'riwayat_keaktifan_id' => 'required',
                ]
            );

        $guru = $request->user();
        $guru->name = $request->name;
        $guru->email = $request->email;
        $guru->nik = $request->nik;
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->no_hp = $request->no_hp;
        $guru->nama_ibu = $request->nama_ibu;
        $guru->status_pegawai = $request->status_pegawai;
        $guru->pendidikan_terakhir = $request->pendidikan_terakhir;

        if ($request->password) $guru->password = bcrypt($request->password);
        $guru->save();

        return redirect('/home')->with('pesan', 'Data Berhasil Diupdate !');
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
