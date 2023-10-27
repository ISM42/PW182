<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormRegistroLibro;

class bibliotecaController extends Controller

{

    public function fecha(){
        $now = Carbon::now();

        
    }

    //
    public function metodoInicio(){
    return view('index');

    }

    public function metodoRegistro(){
    return view('registro_libro');
        
    }

    public function metodoGuardarRegistro(validadorFormRegistroLibro $req){

        /*$validated = $req->validate([
            'txtISBN' => 'required|numeric|digits:13',
            'txtTitulo' => 'required|max:100',
            'txtAutor' => 'required|max:120',
            'txtPag' => 'required|numeric',
            'txtEditorial' => 'required|max:30',
            'txtEmailEditorial' => 'required|email|max:30'
        ]);*/


        return redirect('/registroLibro') ->with('confirmacion', $req->input('txtTitulo'));
            
        }


          


}
