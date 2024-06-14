<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Story extends Model
{
    protected $connection = 'mongodb';
    use HasFactory , LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'media_path',
        'thumbnail_path',
        'duration',
        'app',
        'status'
    ];
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
