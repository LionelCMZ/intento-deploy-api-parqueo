<?php

namespace App\Http\Controllers;

use App\Models\Guardia;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;

class GuardiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Guardia::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $guardia=new Guardia();
        $guardia->CI_Guardia=$request->CI_Guardia;
        $guardia->nombre_guardia=$request->nombre_guardia;
        $guardia->apellido_guardia=$request->apellido_guardia;
        $guardia->correo_guardia=$request->correo_guardia;
        $guardia->celular_guardia=$request->celular_guardia;
        $guardia->direccion_guardia=$request->direccion_guardia;
        $guardia->turno_guardia=$request->turno_guardia;
        $guardia->tiempo_trabajo=$request->tiempo_trabajo;
        $guardia->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guardia  $guardia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $guardia=Guardia::find($id);
        if(is_null($guardia)){
            return response()->json('No se encontro el guardia',404);
        }else{
            return $guardia;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guardia  $guardia
     * @return \Illuminate\Http\Response
     */
    public function edit(Guardia $guardia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guardia  $guardia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $guardia=Guardia::find($id);
        if(is_null($guardia)){
            return response()->json('No se encontro el guardia',404);
        }
        $guardia->CI_Guardia=$request->CI_Guardia;
        $guardia->nombre_guardia=$request->nombre_guardia;
        $guardia->apellido_guardia=$request->apellido_guardia;
        $guardia->correo_guardia=$request->correo_guardia;
        $guardia->celular_guardia=$request->celular_guardia;
        $guardia->direccion_guardia=$request->direccion_guardia;
        $guardia->turno_guardia=$request->turno_guardia;
        $guardia->tiempo_trabajo=$request->tiempo_trabajo;
        $guardia->update();
        return $guardia;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guardia  $guardia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $guardia=Guardia::find($id);
        if(is_null($guardia)){
            return response()->json('No se encontro el guardia',404);
        }
        $guardia->delete();
        return response()->noContent();
    }
}
