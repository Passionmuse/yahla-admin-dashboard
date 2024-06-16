<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class permissions extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;
    
    protected $fillable = [
        "id",
        "parent_id",
        "label",
    ];
}
