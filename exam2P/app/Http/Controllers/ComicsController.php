<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\http\Requests\validadorComics;

class ComicsController extends Controller
{
    //

    public function comics(){
        return view('comics');
    }


    public function metodoGuardar(validadorComics $req){

    return redirect('/')->with('confirmacion','La información llegó al controlador');
    }
}
