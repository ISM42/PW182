<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allbooks= libro::all(); //hacemos un SELECT con un modelo. MANDAMOS LLAMAR TODO LO QUE ESTÁ EN LA TABLA
        return view('libros.index',compact('allbooks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $addLibro= new libro();
        $addLibro->titulo = $request ->txtTitulo;
        $addLibro->autor = $request ->txtaut;
        $addLibro->paginas = $request ->txtpag;
        $addLibro->anio = $request ->txtanio;

        $addLibro->save();

        return redirect()->back();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, libro $id)
    {
        $updatelibro= libro::find($id);
        $uptLibro->titulo = $request ->txtTitulo;
        $uptLibro->autor = $request ->txtaut;
        $uptLibro->paginas = $request ->txtpag;
        $uptLibro->anio = $request ->txtanio;
        $uptLibro->update();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deslibro = libro::find($id);
        $deslibro->delete();

        return redirect()->back();
    }
}
