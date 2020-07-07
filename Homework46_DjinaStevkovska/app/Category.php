<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cards;

class Category extends Model
{
    public function card()
    {
        return $this->belongsToMany(Cards::class);
    }
}
