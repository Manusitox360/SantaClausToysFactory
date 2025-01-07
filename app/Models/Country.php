<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';

    protected $fillable = [
        'name'
    ];

    public function kids(){
        return $this->hasMany(Kid::class);
    }
}
