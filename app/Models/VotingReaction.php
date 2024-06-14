<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class VotingReaction extends Model
{
    protected $connection = 'mongodb';
    protected $fillable = [
        'user_id',
        'vote_id',
        'type'
    ];

    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
