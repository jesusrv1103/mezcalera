<?php

namespace Almacen\Http\Controllers;

use Illuminate\Http\Request;

use Almacen\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Almacen\Http\Controllers\Controller;
use Almacen\Solicitud;
use DB;
use Maatwebsite\Excel\Facades\Excel;



class SolicitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes= DB::table('solicitudes')->where('estado','Activo')->get();
        return view('solicitud.index',['solicitudes' => $solicitudes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solicitud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $solicitudes= new Solicitud();
        $solicitudes->numeroSolicitud=$request->get('numeroSolicitud');
        $solicitudes->fechaS=$request->get('fechaS');
        $solicitudes->areaDireccion=$request->get('areaDireccion');
        $solicitudes->usuario=$request->get('usuario');
        $solicitudes->estado='Activo';
        $solicitudes->save();
        return Redirect::to('solicitudes');
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
        $solicitudes=Solicitud::findOrFail($id);
        $solicitudes->numeroSolicitud=$request->get('numeroSolicitud');
        $solicitudes->fechaS=$request->get('fechaS');
        $solicitudes->areaDireccion=$request->get('areaDireccion');
        $solicitudes->usuario=$request->get('usuario');
        $solicitudes->update();
        return Redirect::to('solicitudes');
    }

    public function verSolicitudes ()
    {

        return view('solicitud.index1');

    
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
