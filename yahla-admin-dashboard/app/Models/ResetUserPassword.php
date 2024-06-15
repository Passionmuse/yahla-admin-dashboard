<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class ResetUserPassword extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $table = 'reset_user_passwords';
    protected $fillable=[
        'code',
        'email',
        'user_id',
        'token'
    ];
    // protected $primaryKey='user_id';
}
