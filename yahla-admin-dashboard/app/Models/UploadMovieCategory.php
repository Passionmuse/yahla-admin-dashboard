<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UploadMovieCategory extends Model
{
    protected $connection = 'mongodb';
    use HasFactory, LogsActivity;
    protected $fillable =[
        'category'
    ];
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }
}
