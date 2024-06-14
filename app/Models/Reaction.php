<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Reaction extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable =[
        'user_id',
        'emoji_id',
        'feed_id',
        'news_id',
        'history_id',
        'vote_id',
        'music_id'
    ];

    public function feed(){
        return $this->belongsTo(Feed::class , 'feed_id');
    }
}
