<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class AppInfo extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;
    protected $fillable = [
        'image',
        'address',
        'apartment',
        'phone',
        'city',
        'state',
        'pincode',
        'country_region',
    ];
}
