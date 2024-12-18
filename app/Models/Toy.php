<?php

namespace App\Models;

use App\Models\MinimumAge;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Toy extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "image",
        "description" ,
        "minimum_age_id",
    ];
    public function Toy (){
        return $this->belongsTo(MinimumAge::class);
    }
}
