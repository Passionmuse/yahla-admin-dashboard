<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Feed extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable=[
        'title',
        'description',
        'status',
        'media',
        'type'
    ];

    public function background(){
        return $this->hasMany(BackgroundFeed::class  , 'id' , 'background_id');
    }

    public function user(){
        return $this->hasMany(User::class , 'id' , 'user_id');
    }
    public function collections()
    {
        return $this->belongsToMany(Collection::class, 'collection_feeds', 'feed_id', 'collection_id');
    }
    public function reactions(){

        return $this->hasMany(Reaction::class , 'feed_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function reports()
    {
        return $this->hasMany(Report::class, 'reported_post_id', 'id');
    }
}
