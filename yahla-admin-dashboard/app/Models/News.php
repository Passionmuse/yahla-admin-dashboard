<?php

namespace App\Models;

use Spatie\Activitylog\LogOptions;
use Illuminate\Support\Facades\URL;
use Jenssegers\Mongodb\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    protected $connection = 'mongodb';
    use HasFactory, LogsActivity;


    // public $image_urls = [];
    // protected $appends = ['image_urls'];
    protected $fillable=[
        'title',
        'description',
        'category_id',
        'image',
        'status'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:i:s', // Adjust the format to match your database
        'image' => 'array',
    ];
     protected $attributes = [
        'image' => '[]'
     ];
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function news_category(){
        return $this->belongsTo(NewsCategory::class , 'category_id' );
    }

    // public function getImageUrlsAttribute(){
    //     return  array_map(function($path){
    //       return URL::to(asset('storage/'.$path));
    //     },$this->image);
    // }

    public function gallery(){
        return $this->hasMany(PostGallery::class);
    }
}
