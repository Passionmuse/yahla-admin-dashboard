<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MusicCategory extends Model
{
    protected $connection = 'mongodb';
    use HasFactory, LogsActivity;
    protected $fillable =[
        'name'
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function musics(){
        return $this->hasMany(Music::class , 'category_id' , 'id');
    }
}
