<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    //public function index()
    public function index(){
        //
        return Auto::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $auto=new Auto();
        $auto->matricula=$request->matricula;
        $auto->tipo_vehiculo=$request->tipo_vehiculo;
        $auto->marca=$request->marca;
        $auto->soat=$request->soat;
        $auto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $auto=Auto::find($id);
        if(is_null($auto)){
            return response()->json('No se encontro el auto',404);
        }else{
            return $auto;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Auto $auto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $auto=Auto::find($id);
        if(is_null($auto)){
            return response()->json('No se encontro el auto',404);
        }
        $auto->matricula=$request->matricula;
        $auto->tipo_vehiculo=$request->tipo_vehiculo;
        $auto->marca=$request->marca;
        $auto->soat=$request->soat;
        $auto->update();
        return $auto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $auto=Auto::find($id);
        if(is_null($auto)){
            return response()->json('No se encontro el auto',404);
        }
        $auto->delete();
        return response()->noContent();
    }
}
