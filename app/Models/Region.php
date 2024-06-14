<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
    protected $connection = 'mongodb';
    use HasFactory, LogsActivity;

    protected $fillable = [
        'name',
        'country_id',
        'status',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
    public function artists()
    {
        return $this->hasMany(Artist::class);
    }
}
