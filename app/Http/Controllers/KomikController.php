<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KomikController extends Controller
{
    public function index()
    {
        // $popular_comic = Http::get("https://www.omdbapi.com/?apikey=$key1&s=Harry Potter")
        // ->json();

        $popular_comic = Http::get("https://komiku-api.fly.dev/api/comic/popular/page/1")
        ->object();
        
        return view("index", [
            "comics" => $popular_comic,
        ]);
    }
}
