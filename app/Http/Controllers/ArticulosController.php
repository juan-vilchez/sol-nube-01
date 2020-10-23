<?php

namespace App\Http\Controllers;

use App\Articulos;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['articulos']=articulos::paginate(8);
        return view('articulos.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosArticulo=request()->except('_token');
        articulos::insert($datosArticulo);
        return redirect('articulos')->with('Mensaje','Se ha agregado un nuevo articulo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function show(Articulos $articulos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo= articulos::findOrFail($id);
        return view('articulos.edit', compact('articulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $datosArticulo=request()->except(['_token','_method']);
         articulos::where('id','=',$id)->update($datosArticulo);
 
         $articulo= articulos::findOrFail($id);
 
         return redirect('articulos')->with('Mensaje','El articulo se actualizo con exito');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articulos  $articulos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        articulos::destroy($id);
        return redirect('articulos')->with('Mensaje','El articulo se ha eliminado');
    }
}
