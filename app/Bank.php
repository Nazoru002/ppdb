<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'banks';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_bank',
        'no_rekening'
    ];

    public function siswa()
    {
        return $this->belongsTo('App\Siswa');
    }
}
