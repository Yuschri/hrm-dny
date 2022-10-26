<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    /**
     *
     *  @var string[]
     */

    protected $fillable =[
        'nik',
        'nama',
        'agama',
        'tempat_lahir',
        'tanggal_lahir',
        'foto',
        'pendidikan_terakhir',
        'alamat',
        'telp',
        'email',
        'status_pernikahan',
        'status_akun',
        'tgl_gabung',
        'tgl_keluar',
        'atasan_id',
        'jabatan_id',
        'departmen_id',
        'cabang_id',
    ];

    public function atasan(){
        return $this->belongsTo(Pegawai::class);
    }

    public function jabatan(){
        return $this->belongsTo(Jabatan::class);
    }

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function departmen(){
        return $this->belongsTo(Departmen::class);
    }

    public function cabang(){
        return $this->belongsTo(Cabang::class);
    }
}
