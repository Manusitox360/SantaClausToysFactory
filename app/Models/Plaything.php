<?php

namespace App\Models;

use App\Models\ToyType;
use Illuminate\Database\Eloquent\Model;

class Plaything extends Model
{
    protected $table = 'plaything';

    protected $fillable = [
        'name'
    ];

    public function toyType()
    {
        return $this->morphOne(ToyType::class, 'associated');
    }
}
