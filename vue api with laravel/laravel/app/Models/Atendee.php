<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendee extends Model
{
    use HasFactory;



    public function event(){
        return $this->belongsToMany('App\Models\EventAtendee', 'event_atendees','event_id','atendee_id');
    }
}
