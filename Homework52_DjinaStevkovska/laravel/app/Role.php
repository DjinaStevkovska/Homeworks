<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ability;
use App\User;

class Role extends Model
{
    public function abilities()
    {
        // $ability = (array) $ability;
        return $this->belongsToMany(Ability::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
