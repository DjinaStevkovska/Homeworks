<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cards;


class CardsController extends Controller
{
    public function index()
    {
        $cards = Cards::all();

        return view('pages.cards', ['cards' => $cards]);

    }

    public function show($id)
    {
        $card = Cards::findOrFail($id);

        return view('pages.single-card', ['card' => $card]);

    }

}
