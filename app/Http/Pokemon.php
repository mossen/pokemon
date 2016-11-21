<?php
namespace App\Http;

use File;
use Exception;

class Pokemon{



    public function pokedex(){
        $path = storage_path() . "/app/data/pokedex.json";
        if (!File::exists($path)) {
            throw new Exception("Invalid File");
        }

        return json_decode(File::get($path));
    }

    public function skills(){
        $path = storage_path() . "/app/data/skills.json";
        if (!File::exists($path)) {
            throw new Exception("Invalid File");
        }

        return json_decode(File::get($path));
    }

    public function types(){
        $path = storage_path() . "/app/data/types.json";
        if (!File::exists($path)) {
            throw new Exception("Invalid File");
        }

        return json_decode(File::get($path));
    }
}