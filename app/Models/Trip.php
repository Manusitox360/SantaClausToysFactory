<?php

namespace App\Models;

use App\Models\ToyType;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $table = 'trip';

    protected $fillable = [
        'name'
    ];

    public function toyType()
    {
        return $this->morphOne(ToyType::class, 'associated');
    }
}
