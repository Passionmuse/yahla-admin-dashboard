<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class MarketCategory extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'mail_contact',
        'message'
    ];
}
