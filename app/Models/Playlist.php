<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Playlist extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;
            protected $fillable = [
                "user_id",
                "playlist_name",
                "visibility",
                "is_music",
                "is_feed",
                "is_vote",
                "is_news",
                "is_history"
            ];

    public function PlaylistMusics(){
        return $this->hasOne(PlaylistMusic::class);
    }
}
