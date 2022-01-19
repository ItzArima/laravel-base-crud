<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index(){
        $comicses = Comic::all();
        return view('comics' , compact('comicses'));
    }
}
