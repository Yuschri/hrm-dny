<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use Exception;

class PegawaiController extends Controller
{
    //
    /**
     * Store a new flight in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            // Validate the request...
        $request->validate([
            'nik' => ['required', 'integer', 'max:20'],
            'name' => ['required', 'string', 'max:255'],
            'agama' => ['required', 'string', 'max:55'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'date'],
            'foto' => ['required', 'string', 'max:255'],
            'pendidikan_terakhir' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'telp' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'status_pernikahan' => ['required', 'integer', 'max:2'],
            'status_akun' => ['required', 'integer', 'max:2'],
            'tgl_gabung' => ['required', 'date'],
            'tgl_keluar' => ['required', 'date'],
            'atasan_id' => ['required', 'integer', 'max:2'],
            'jabatan_id' => ['required', 'integer', 'max:2'],
            'departmen_id' => ['required', 'integer', 'max:2'],
            'cabang_id' => ['required', 'integer', 'max:2'],
        ]);
        $pegawai = new Pegawai();

        $pegawai = $pegawai::create([
            'nik' => $request->nik,
            'name' => $request->name,
            'agama' => $request->agama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'foto' => $request->foto,
            'pendidikan_terakhir' => $request->pendidikan_terakhir,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'email' => $request->email,
            'status_pernikahan' => $request->status_pernikahan,
            'status_akun' => $request->status_akun,
            'tgl_gabung' => $request->tgl_gabung,
            'tgl_keluar' => $request->tgl_keluar,
            'atasan_id' => $request->atasan_id,
            'jabatan_id' => $request->jabatan_id,
            'departmen_id' => $request->departmen_id,
            'cabang_id' => $request->cabang_id,
        ]);

        $pegawai->save();
        } catch (Exception $error){
            return $error->getMessage();
        };
    }

    public function fetch(Request $request)
    {
        // Get pegawai
        $pegawai = $request->pegawai();

        // Return response
        return $pegawai;
    }
}
