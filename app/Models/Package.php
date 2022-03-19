<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    
    protected $guard = [];

    public function images()
    {
    return $this->hasMany(\App\Models\Image::class, 'package_id');
    }

    public function categories()
    {
        return $this->belongsToMany(\App\Models\Category::class,'category_package');
    }
}
