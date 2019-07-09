<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\State;

class Country extends Model
{
    public function states()
    {
        return $this->belongsToMany(State::class);
    }
}
