<?php

namespace App\Http\Controllers;

use App\Pokemon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;

class PokemonController extends Controller
{
    public function getAllPokemon()
    {
        $pokemons = Pokemon::paginate(12);
        return view('pokemon.show',compact('pokemons'));
    }

    public function getPokemonImage($filename)
    {
        $image = Storage::disk('pokemon')->get($filename);
        return response($image,200)->header('Content-Type','Image/JPEG');
    }
}
