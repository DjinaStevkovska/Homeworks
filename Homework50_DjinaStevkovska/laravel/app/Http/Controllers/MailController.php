<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\Subscribe;

class MailController extends Controller
{
    public function send(Request $request)
    {
        Mail::to(['adress' => $request->email])->send(new Subscribe($request));
        // dd(request("email"));
        // dd($request->email);

        return redirect('/')->with(['message' => 'You are subscribed now!']);
    }
}
