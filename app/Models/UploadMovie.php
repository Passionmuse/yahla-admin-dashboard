<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UploadMovie extends Model
{
    protected $connection = 'mongodb';
    use HasFactory , LogsActivity;
    protected $fillable=[
        'title',
        'thumbnail',
        'description',
        'video',
        'category_id'
    ];
    protected $casts = [
        'movie' => 'array'
     ];
     protected $attributes = [
        'movie' => '[]'
     ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function moviecategory(){
        return $this->belongsTo(UploadMovieCategory::class , 'category_id');
    }
}
