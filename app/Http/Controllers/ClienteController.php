<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Cliente::all();
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
        $cliente=new Cliente();
        $cliente->CI=$request->CI;
        $cliente->nombre=$request->nombre;
        $cliente->apellido=$request->apellido;
        $cliente->correo=$request->correo;
        $cliente->celular=$request->celular;
        $cliente->cantidad_meses=$request->cantidad_meses;
        $cliente->save();
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
        $cliente=Cliente::find($id);
        if(is_null($cliente)){
            return response()->json('No se encontro el producto',404);
        }else{
            return $cliente;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
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
        $cliente=Cliente::find($id);
        if(is_null($cliente)){
            return response()->json('No se encontro el producto',404);
        }
        $cliente->CI=$request->CI;
        $cliente->nombre=$request->nombre;
        $cliente->apellido=$request->apellido;
        $cliente->correo=$request->correo;
        $cliente->celular=$request->celular;
        $cliente->cantidad_meses=$request->cantidad_meses;
        $cliente->update();
        return $cliente;
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
        $cliente=Cliente::find($id);
        if(is_null($cliente)){
            return response()->json('No se encontro el producto',404);
        }
        $cliente->delete();
        return response()->noContent();
    }
}
