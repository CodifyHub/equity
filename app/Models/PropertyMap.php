<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyMap extends Model
{
    protected $fillable = [
        'property_id',
        'link'
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
