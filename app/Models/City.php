<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    protected $connection = 'mongodb';
    use HasFactory, LogsActivity;

    protected $fillable = [
        'name',
        'country_id',
        'region_id',
        'zipcode',
        'status',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
