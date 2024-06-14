<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ringtone extends Model
{
    protected $connection = 'mongodb';
    use HasFactory , LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

}
