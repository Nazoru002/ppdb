<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'name',
        'date_of_birth',
        'phone',
        'address',
        'photo'
    ];
}
