<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Kid extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'surname',
        'image',
        'age',
        'attitude'
    ];

    public function Toy()
    {
        return $this->hasMany(Toy::class);
    }
}