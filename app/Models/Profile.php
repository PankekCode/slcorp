<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id','nama_lengkap','nik','no_hp','alamat'
    ];
}
