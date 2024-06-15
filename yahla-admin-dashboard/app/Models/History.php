<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class History extends Model
{
    protected $connection = 'mongodb';
    use HasFactory, LogsActivity;

    protected $fillable=[
        'title',
        'category_id',
        'language',
        'image',
        'video'
    ];

    protected $casts = [
        'image' => 'array',
        'video' => 'array',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function history_category(){
        return $this->belongsTo(HistoryCategory::class, 'category_id');
    }


    public function gallery(){
        return $this->hasMany(PostGallery::class);
    }
}
