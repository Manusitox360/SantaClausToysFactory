<?php

namespace App\Models;

use App\Models\ToyType;
use Illuminate\Database\Eloquent\Model;

class Charcoal extends Model
{
    protected $table = 'charcoal';

    protected $fillable = [
        'name'
    ];

    public function toyType()
    {
        return $this->morphOne(ToyType::class, 'associated');
    }
}
