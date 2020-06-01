<?php

namespace App\Http\Controllers;

use App\Cliente;
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
        
        $datos1['clientes']=Cliente::paginate(5);
        return view('clientes.index', $datos1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $campos=[
            'documento'=> 'required|max:10',
            'nombre' => 'required',
            'apellido' => 'required',
            'id_compra' => 'required',
        
        ];
        $Mensaje1=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje1);
        //$datosCliente=request()->all();
        $datosCliente=request()->except('_token');
        Cliente::insert($datosCliente);
        return redirect('clientes')->with('Mensaje1','Cliente agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente= Cliente::findOrFail($id);
        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        
        $campos=[
            'documento'=> 'required|max:10',
            'nombre' => 'required',
            'apellido' => 'required',
            'id_compra' => 'required',
        
        ];
        $Mensaje1=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje1);
        
        $datosCliente=request()->except(['_token','_method']);
        Cliente::where('id','=',$id)->update($datosCliente);
         
        //$cliente= Cliente::findOrFail($id);
        //return view('clientes.edit', compact('cliente'));
        return redirect('clientes')->with('Mensaje1','Clientes modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::destroy($id);
        return redirect('clientes')->with('Mensaje1','Cliente eliminado con éxito');;
    }
}
