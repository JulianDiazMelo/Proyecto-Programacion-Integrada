<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['productos']=Productos::paginate(10);
        return view('productos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
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
            'producto'=> 'required|max:10',
            'cantidad' => 'required',
            'tamano' => 'required',
            'precio_individual' => 'required',
            'fecha_vencimiento' => 'required'
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);

        $datosproducto=request()->except('_token');
        Productos::insert($datosproducto);
        //return response()->json($datosproducto);
        return redirect('productos')->with('Mensaje','Producto agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function show(Productos $productos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto= Productos::findOrFail($id);
        return view('productos.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'producto'=> 'required|max:10',
            'cantidad' => 'required',
            'tamano' => 'required',
            'precio_individual' => 'required',
            'fecha_vencimiento' => 'required'
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);


        $datosproducto=request()->except(['_token','_method']);
        Productos::where('id','=',$id)->update($datosproducto);

        //$producto= Productos::findOrFail($id);
        //return view('productos.edit',compact('producto'));
        return redirect('productos')->with('Mensaje','Producto modificado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productos  $productos
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Productos::destroy($id);
        return redirect('productos')->with('Mensaje','Producto eliminado con éxito');

    }
}
