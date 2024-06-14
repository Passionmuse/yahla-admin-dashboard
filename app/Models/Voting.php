<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voting extends Model
{
    protected $connection = 'mongodb';
    use HasFactory , LogsActivity;

    protected $fillable=[
        'name',
        'category_id',
        'description',
        'image',
        'options'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'options' => 'array',
    ];
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }
    public function voting_category(){
        return $this->belongsTo(VotingCategory::class , 'category_id');
    }

    public function gallery(){
        return $this->hasMany(PostGallery::class,'vote_id','id');
    }

}
