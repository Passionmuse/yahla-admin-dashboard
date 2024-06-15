<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class VideoClip extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
         
        'artist_id',
        'video',
        'status',
    ];

    protected $casts = [
        'video' => 'array'
     ];
     protected $attributes = [
        'video' => '[]'
     ];

    public function music_category(){
        return $this->belongsTo(MusicCategory::class , 'category_id' );
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artists_id', '_id');
    }
}
