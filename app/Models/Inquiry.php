<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
    ];

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

    public function getEmailAttribute($value)
    {
        return strtolower($value);
    }
    public function getPhoneAttribute($value)
    {
        return preg_replace('/[^0-9]/', '', $value);
    }
    public function getSubjectAttribute($value)
    {
        return ucwords($value);
    }
}
