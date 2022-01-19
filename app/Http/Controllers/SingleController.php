<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleController extends Controller
{
    public function show($id){
        $comics = config('db');

        if(is_numeric($id) && $id >= 0 && $id < count($comics)){
            return view('single', [
                'comics' => $comics[$id],
            ]);
        }
        else{
            abort(404);
        }
    }
}
