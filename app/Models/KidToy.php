<?php

namespace App\Models;

use App\Models\Kid;
use App\Models\Toy;
use Illuminate\Database\Eloquent\Relations\Pivot;

class KidToy extends Pivot
{
    protected $table = 'kid_toy';

    protected $fillable = [
        'kid_id',
        'toy_id'
    ];

    public function kid()
    {
        return $this->belongsTo(Kid::class);
    }

    public function toy()
    {
        return $this->belongsTo(Toy::class);
    }
}
