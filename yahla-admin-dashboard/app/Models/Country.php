<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    protected $connection = 'mongodb';
    use HasFactory, LogsActivity;

    protected $fillable = [
      'name',
      'code',
      'flag_path',
      'image_path',
      'icon_code',
      'capital_id',
      'language_id',
      'status',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }
    public function subCategoryDepartments()
    {
        return $this->hasMany(SubCategoryDepartment::class, 'category_id');
    }

    public function regions()
    {
        return $this->hasMany(Region::class, 'country_id', 'id');
    }

    public function cities()
    {
        return $this->hasMany(City::class, 'country_id', 'id');
    }

    public function capital()
    {
        return $this->hasOne(City::class, 'capital_id', 'id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
