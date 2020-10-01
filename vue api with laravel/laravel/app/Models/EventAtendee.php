<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventAtendee extends Model
{
    use HasFactory;
    protected $table = 'event_atendees';
    protected $fillable = ['event_id', 'atendee_id'];
}
