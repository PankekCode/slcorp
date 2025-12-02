<?php

namespace App\Models;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class akun extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'akun';

    protected $primarykey = 'id_akun';

    protected $fillable = [
        'username',
        'password',
        'email',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }


}
