<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KPI extends Model
{
    /**
     *
     *  @var string[]
     */

    protected $fillable =[
        'pertanyaan',
        'bobot',
        'nilai',
        'id_kpi_master'
    ];

    public function kpi_master(){
        return $this->belongsTo(KPI_master::class);
    }
}
