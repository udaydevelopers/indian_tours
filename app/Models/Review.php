<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guard = [];

    public function package()
    {
        return $this->belongsTo(\App\Models\Package::class);
    }

    public function getAttributeIsPublish()
    {
        dd('test');
    }

}
