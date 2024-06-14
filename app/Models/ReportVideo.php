<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReportVideo extends Model
{
    protected $connection = 'mongodb';
    use HasFactory , LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function video(){
        return $this->belongsTo(UplaodVideo::class , 'video_id');
    }
}
