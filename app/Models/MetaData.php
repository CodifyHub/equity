<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetaData extends Model
{
    protected $fillable = [
        'property_id',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    // casts
    protected $casts = [
        'meta_keywords' => 'array',
    ];
}
