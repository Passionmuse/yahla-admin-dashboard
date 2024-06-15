<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    protected $connection = 'mongodb';
    use HasFactory, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'reported_user_id',
        'reported_post_id',
        'reported_comment_id',
        'reason',
        'description',
        'status',
        'action_taken',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reportedUser()
    {
        return $this->belongsTo(User::class, 'reported_user_id');
    }
}
