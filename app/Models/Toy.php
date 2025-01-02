<?php

namespace App\Models;

use App\Models\MinimumAge;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Toy extends Model
{
    use HasFactory;

    protected $table = 'toy';

    protected $fillable = [
        'name',
        'image',
        'description',
        'minimum_age_id'
    ];

    public function toy()
    {
        return $this->belongsTo(MinimumAge::class);
    }
}
