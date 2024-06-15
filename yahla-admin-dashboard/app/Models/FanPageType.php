<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class FanPageType extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    public function category()
    {
        return $this->hasMany(FanPage::class, 'category_id', 'id');
    }
}
