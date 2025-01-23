<?php

namespace App\Models;

use App\Models\Toy;
use Illuminate\Database\Eloquent\Model;

class ToyType extends Model
{
    protected $table = 'toy_type';

    protected $fillable = [
        'associated_type',
        'associated_id'
    ];

    public function toys()
    {
        return $this->hasMany(Toy::class);
    }

    public function associated()
    {
        return $this->morphTo();
    }
}
