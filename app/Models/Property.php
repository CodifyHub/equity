<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'price',
        'location',
        'image',
        'short_description',
        'description',
        'bedroom',
        'bathroom',
        'size',
        'is_active',
        'state',
        'city',
        'whatsapp_link',
        'property_type',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    public function map()
    {
        return $this->hasOne(PropertyMap::class);
    }

    public function features()
    {
        return $this->hasMany(PropertyFeature::class);
    }

    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }

    public function metadata()
    {
        return $this->hasOne(MetaData::class);
    }
}
