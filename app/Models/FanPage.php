<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FanPage extends Model
{
    protected $connection = 'mongodb';
    use HasFactory, LogsActivity;

    protected $fillable=[
        'user_id',
        'fanpage_name',
        'category_id',
        'status',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function category()
    {
        return $this->belongsTo(FanPageType::class, 'category_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
