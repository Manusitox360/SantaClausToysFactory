<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MinimumAge extends Model
{
    use HasFactory;

    protected $table = 'minimum_age';

    protected $fillable = [
        'min',
        'max'
    ];

    public function toys()
    {
        return $this->hasMany(Toy::class);
    }

    public function __toString()
    {
        $minAge = $this->min;
        $maxAge = $this->max;

        $result = $minAge . '-' . $maxAge;

        if ($minAge == 18)
            $result = '+18';

        if ($minAge == 0 && !$maxAge)
            $result = '-18';

        return $result;
    }
}
