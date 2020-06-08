<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'bukti_photo'
    ];
}
