<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Music extends Model
{
    protected $connection = 'mongodb';
    use HasFactory, LogsActivity;

    protected $fillable =[        
        'audio',
        'artists_id',
        'status',

    ];
    protected $casts = [
        'audio' => 'array'
     ];
     protected $attributes = [
        'audio' => '[]'
     ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function music_category(){
        return $this->belongsTo(MusicCategory::class , 'category_id' );
    }


    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artists_id', '_id');
    }
}
