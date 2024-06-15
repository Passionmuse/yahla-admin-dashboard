<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostGallery extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($gallery) {
            Storage::delete($gallery->media_url);
        });
    }
    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function news(){
        return $this->belongsTo(News::class);
    }

    public function history(){
        return $this->belongsTo(History::class);
    }




}
