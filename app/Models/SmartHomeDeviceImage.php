<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmartHomeDeviceImage extends Model
{
    protected $fillable = [
        'SmartHomeDevice_id',
        'image',
    ];

    public function smartHomeDevice()
    {
        return $this->belongsTo(SmartHomeDevice::class);
    }
}
