<?php

namespace App\Models;

use App\Models\Kid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Toy extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        "name",
        "picture",
        "descreption" ,
        "min_age",
    ];
    public function Toy (){
        
        return $this->hasMany(Toy::class);
    }
}
