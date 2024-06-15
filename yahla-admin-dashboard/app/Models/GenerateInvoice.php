<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class GenerateInvoice extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
