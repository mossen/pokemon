<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Pokemon;
use App\Http\Requests;
use Mockery\CountValidator\Exception;

class PokemonController extends Controller
{
    /**
     * Display a index page.
     */
    public function index()
    {
        $pokemons = new Pokemon();

        return view('home.index', ["pokemons" => $pokemons->pokedex()]);
    }



    //Handel AJAX request
    public function ajaxRequest($id)
    {
        $pokemons = (new Pokemon)->pokedex();
        foreach ($pokemons as $pokemon)
        {
            if ($pokemon->id == $id)
            {
                //Find pokemon types
                $types = (new Pokemon())->types();
                foreach ($pokemon->type as $key => $thisPokemonType)
                {
                    foreach ($types as $type)
                    {
                        if ($thisPokemonType == $type->cname)
                        {
                            $pokemon->type[$key] = $type->ename;
                        }
                    }
                }

                return json_encode($pokemon);
            }
        }


        return "Pokemon does not exist.";

    }

}
