<?php

namespace App\Http\Controllers;

use App\Compras;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['compras']=Compras::paginate(5);
        return view('compras.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compras.create');
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
            'cod_compra'=> 'required|max:10',
            'producto' => 'required',
            'cantidad' => 'required'
        ];
        $Mensaje2=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje2);

        
        $datosCompra=request()->except('_token');
        Compras::insert($datosCompra);
        return redirect('compras')->with('Mensaje2','Compra agregada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Compras  $clienteCompras
     * @return \Illuminate\Http\Response
     */
    public function show(Compras $clienteCompras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Compras  $clienteCompras
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compra= Compras::findOrFail($id);
        return view('compras.edit',compact('compra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Compras  $clienteCompras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'cod_compra'=> 'required|max:10',
            'producto' => 'required',
            'cantidad' => 'required'
        ];
        $Mensaje2=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje2);

        
        $datosCompra=request()->except('_token','_method');
        Compras::where('id','=',$id)->update($datosCompra);

         
        return redirect('compras')->with('Mensaje2','Compra Modificada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Compras  $clienteCompras
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Compras::destroy($id);
        return redirect('compras')->with('Mensaje2','Compra eliminada con éxito');
    }
}
