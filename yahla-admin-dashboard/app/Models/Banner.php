<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Banner extends Model
{
    protected $connection = 'mongodb';
    
    use HasFactory;

    protected $fillable = [
        'banner',
        'audio',
        'artists_id',
        'status',
        
    ];
    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artists_id', '_id');
    }
}
