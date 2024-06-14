<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventCategory extends Model
{
    protected $connection = 'mongodb';
    use HasFactory, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'status',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
