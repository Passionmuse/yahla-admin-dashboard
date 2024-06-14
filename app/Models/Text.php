<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Text extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;
    protected $fillable = [
        'text',
        'language_id',
        'language_code',
    ];

    public function translations ()
    {
        return $this->hasMany(Translation::class, 'text_id');
    }
}
