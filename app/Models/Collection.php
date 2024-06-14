<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Collection extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;
    public function feeds()
    {
        return $this->belongsToMany(Feed::class, 'collection_feeds', 'collection_id', 'feed_id');
    }

}
