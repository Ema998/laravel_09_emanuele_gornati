<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Http\Requests\ProdottiRequest;

class ProdottiController extends Controller
{
    public function prodotti () {
        $prodotti = Game::all();
        return view('prodotti', compact('prodotti'));
    }

    public function store(ProdottiRequest $request)
    {
        $nome = $request->input('nome');
        $prezzo = $request->input('prezzo');
        $descrizione = $request->input('descrizione');
        $img = null;

        if($request->file('img')){
            $img = $request->file('img')->store('img', 'public');
        }
        
        
        $prodotto = Game::create([
            'nome' => $nome,
            'prezzo' => $prezzo,
            'descrizione' => $descrizione,
            'img' => $img
        ]);

        return redirect()->route('prodotti')->with('message', 'Prodotto aggiunto con successo!');
    }
