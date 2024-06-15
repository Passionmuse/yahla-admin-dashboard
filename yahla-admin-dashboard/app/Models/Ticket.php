<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    protected $connection = 'mongodb';
    use HasFactory , LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'event_id',
        'name',
        'description',
        'price',
        'price_male',
        'price_female',
        'price_kids',
        'quantity',
        'total_sales',
        'start_sale',
        'end_sale',
        'status',
    ];
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
