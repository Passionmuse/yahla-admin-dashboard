<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class CategoryDepartment extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;

    public function subCategoryDepartments()
    {
        return $this->hasMany(SubCategoryDepartment::class, 'category_id');
    }
    Protected $fillable = [
        'name',
        'thumbnail',
    ];
}
