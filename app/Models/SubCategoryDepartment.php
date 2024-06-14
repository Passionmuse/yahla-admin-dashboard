<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class SubCategoryDepartment extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    protected $fillable = [
        'name',
        'thumbnail',
        'country_id',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
