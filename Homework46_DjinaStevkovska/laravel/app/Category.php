<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Card;

class Category extends Model
{
    public function card()
    {
        return $this->belongsToMany(Card::class);
    }
}
