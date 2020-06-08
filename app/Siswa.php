<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'nik',
        'name',
        'province',
        'city',
        'tempat_lahir',
        'date_of_birth',
        'gender',
        'phone',
        'address',
        'post_code',
        'berkas',
        'photo',
        'transfer_status',
        'payment_status'
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'user_id', 'id');
    }
}
