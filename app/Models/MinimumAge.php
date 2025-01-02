<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MinimumAge extends Model
{
    use HasFactory;

    protected $table = 'minimum_age';

    protected $fillable = [
        'min',
        'max'
    ];

    function toys(){
        return $this->hasMany(Toy::class);
    }
}