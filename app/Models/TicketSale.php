<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TicketSale extends Model
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
        'user_id',
        'total'
    ];
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }
}
