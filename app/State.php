<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Country;

class State extends Model
{
    public function countries()
    {
        return $this->belongsToMany(Country::class);
    }
}
