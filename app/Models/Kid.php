<?php

namespace App\Models;

use App\Models\KidToy;
use App\Models\Gender;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Kid extends Model
{
    use HasFactory;

    protected $table = 'kid';

    protected $fillable = [
        'name',
        'surname',
        'image',
        'age',
        'attitude',
        'gender_id',
        'country_id'
    ];

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function toys()
    {
        return $this->belongsToMany(Toy::class)
            ->as('gift')
            ->withTimestamps();
    }
    public function getAttitudeAttribute($value)
    {
        return $value ? 'Good' : 'Bad';
    }
}
