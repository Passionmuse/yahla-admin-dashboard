<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
{
    protected $connection = 'mongodb';
    use HasFactory, LogsActivity;

    protected $fillable=[
        'name',
        'country_id',
        'status',
        'gender',
        'image'
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }
public function music(){
    return $this->hasMany(Music::class, 'artists_id', '_id');
}
public function banner(){
    return $this->hasMany(Banner::class, 'artists_id', '_id');
}

public function video_clips(){
    return $this->hasMany(VideoClip::class, 'artists_id', '_id');
}

 public function country(){
    return $this->belongsTo(Country::class);
 }


}
