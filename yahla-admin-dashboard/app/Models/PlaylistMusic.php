<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class PlaylistMusic extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    public $fillable = [
        'playlist_id',
        'musics'
    ];

    public function playlist(){
        return $this->belongsTo(Playlist::class);
    }
    protected $casts = [
        'musics' => 'array'
     ];
     protected $attributes = [
        'musics' => '[]'
     ];

}
