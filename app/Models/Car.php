<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillabe = [
        'brand',
        'model',
        'year',
        'maxSpeed',
        'isAutomatic',
        'engine',
        'numberOfDoors'
    ];
}
