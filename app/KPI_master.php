<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KPI_master extends Model
{
    /**
     *
     *  @var string[]
     */

    protected $fillable =[
        'name',
        'bobot',
        'periode',
        'id_pegawai'
    ];
}
