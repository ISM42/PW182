<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormDiario;
use DB;
use Carbon\carbon;

class ControllerCRUDD extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consulRecuerdos= DB::table('tb_recuerdos')->get();
        return view('recuerdos',compact('consulRecuerdos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(('formulario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorFormDiario $request)
    {
        //Es el método que se va a usar para hacer INSERTS
        DB::table('tb_recuerdos')->insert([
            "titulo"=>$request->input('txtTitulo'),
            "recuerdo"=>$request->input('txtRecuerdo'),
            "fecha"=>Carbon::now(),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);

        return redirect('/recuerdo/create')->with('confirmacion','Tu recuerdo llegó al controlador');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorFormDiario $request, string $id)
    {
        //el id sin "$" es el nombre del campo en la BD
        DB::table('tb_recuerdos')->where('id',$id)->update([
            "titulo"=> $request->input('txtTitulo'),
            "recuerdo"=> $request->input('txtRecuerdo'),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('/recuerdo/create')->with('confirmacion','Recuerdo modificado en la BD');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('tb_recuerdos')->where('id', $id)->delete();
    
        return redirect('/recuerdo/create')->with('confirmacion', 'Recuerdo eliminado de la BD');
    }
}
