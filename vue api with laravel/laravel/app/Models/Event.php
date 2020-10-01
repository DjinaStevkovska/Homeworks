<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $fillable = ['title', 'date', 'time', 'location', 'description','category'];



    public function atendees(){
        return $this->belongsToMany('App\Models\Atendee', 'event_atendees','atendee_id','event_id');
    }

    public function creator(){
        return $this->belongsToMany('App\Models\User', 'user_events','user_id','event_id');
    }



}
