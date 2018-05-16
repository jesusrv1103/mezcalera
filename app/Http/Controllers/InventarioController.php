<?php

namespace Almacen\Http\Controllers;


use Illuminate\Http\Request;

use Almacen\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Almacen\Http\Controllers\Controller;
use Almacen\Inventarios;
use DB;
use Maatwebsite\Excel\Facades\Excel;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $inventarios= DB::table('partidas')
       ->join('partidas as numeroPartida', 'partidas as concepto')
       ->join('articulos as nombre', 'articulos as cantidad')
       >select('articulos.*','partidas.numeroPartida','partidas.concepto','articulos.nombre', 'articulos.cantidad')
->get();    
       return view('inventario.index',['inventarios' => $inventarios]);
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
        $inventarios= new inventarios();
        $inventarios->numeroPartida=$request->get('numeroPartida');
        $inventarios->concepto=$request->get('concepto');
        $inventarios->nombre=$request->get('nombre');
        $inventarios->cantidad=$request->get('cantidad');
        $inventarios->save();
        return Redirect::to('inventarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
