<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmartHomeDevice extends Model
{
    protected $fillable = [
        "name",
        "slug",
        "price",
        "short_description",
        "description",
        "image",
    ];

    public function images()
    {
        return $this->hasMany(SmartHomeDeviceImage::class);
    }
}
