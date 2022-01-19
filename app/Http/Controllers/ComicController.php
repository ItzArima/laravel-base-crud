<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function home(){
        $comicses = Comic::all();
        return view('comics' , compact('comicses'));

    }
    
    public function characters(){
        return view('characters');
    }

    public function movies(){
        return view('movies');
    }

    public function tv(){
        return view('tv');
    }

    public function games(){
        return view('games');
    }
    
    public function collectibles(){
        return view('collectibles');
    }

    public function videos(){
        return view('videos');
    }

    public function fans(){
        return view('fans');
    }

    public function news(){
        return view('news');
    }

    public function shop(){
        return view('shop');
    }

}
