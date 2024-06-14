<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class AnimationEmoji extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    public $fillable = [
        'emoji',
    ];
}
