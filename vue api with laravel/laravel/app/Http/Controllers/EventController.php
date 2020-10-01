<?php

namespace App\Http\Controllers;

use App\Models\Atendee;
use App\Models\Event;
use App\Models\User;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return Event::with('atendees', 'creator')->get();
    }

    public function show($id){
        return Event::findOrFail($id)->with('atendees', 'creator')->get();
    }

    public function store(Request $request){
        $event = new Event();
        $event->title = $request->title;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->location = $request->location;
        $event->description = $request->description;
        $event->category = $request->category;
        $event->save();

    }
}



