<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = 'gender';
    
    protected $fillable = [
        'name'
    ];

    public function kids(){
        return $this->hasMany(Kid::class);
    }
}
