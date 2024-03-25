<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table = 'properties_';
    protected $fillable = [
        'property_title',
        'description',
        'rooms',
        'bathrooms',
        'price',
        'property_type',
        'location',
        'photo',
    ];
}
