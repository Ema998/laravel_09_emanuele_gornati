<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
class ProdottiController extends Controller
{
    public function store(Request $request)
    {
        
        $prodotto = Game::create([
            'nome' => $request->input('nome'),
            'prezzo' => $request->input('prezzo'),
            'descrizione' => $request->input('descrizione'),
        ]);

        return redirect()->route('prodotti')->with('success', 'Prodotto aggiunto con successo!');

    }

    public function prodottiList(){
        $prodotti = Game::all();
        return view('prodotto.prodotti', ['prodotti' => $prodotti]);
    }
}
