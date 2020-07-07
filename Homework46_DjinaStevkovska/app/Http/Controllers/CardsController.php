<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cards;
use App\User;


class CardsController extends Controller
{
    public function index()
    {
        $cards = Cards::all();
        // take(6)->latest()->get();

        return view('pages.cards', ['cards' => $cards]);
    }

    public function show($id)
    {
        $card = Cards::findOrFail($id);
        // ->user();
        // dd($card);
        // $card = Card::find($card->card_id)->user();

        // $user = User::find($card->user_id);

        // $category = Category::where('');


        return view('pages.single-card', ['card' => $card]);
    }
    
    public function create(Request $request) 
    {
        // $img = $request->input('img');
        $post = $request->all();
        // dd($post);

        $this->validate($request, [
            'img'  => 'required',
            'body' => 'required'
        ]);

        Card::create($this->validateCard);
        // same as above
        // $card = new Cards();
        // $card->img  = $request->input('img', 30);
        // $card->body = $request->input('body');
        // $card->save();
        
        return redirect('/');
    }

    public function edit($id)
    {
        $card = Cards::findOrFail($id);
        return view('pages.edit', ['card' => $card]);
    }


    public function update(Cards $card, $id) 
    {
        // $card->save();

        $cardObj = Cards::find($id);
        $cardObj->update($this->validateCard());
        // validation same as here: 
        // $cardObj = Cards::findOrFail($card->id);
        // $card->body = request('body');
        // $card->img  = request('img');

        return redirect(route('showRoute', $id));
        // return redirect('/card-{id}');

        // $example = $request->input('body');
    }


    public function destroy($id)
    {
        $card = Cards::find($id)->delete();
        return redirect('/');
    }


    public function validateCard()
    {
        return request()->validate([
            'img'  => 'required',
            'body' => 'required'
        ]);
    }
}
