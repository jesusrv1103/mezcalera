<?php

namespace Almacen\Http\Controllers;

use Illuminate\Http\Request;

use Almacen\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Almacen\Http\Controllers\Controller;
use Almacen\Partidas2;
use DB;
use Maatwebsite\Excel\Facades\Excel;

class Partida2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
     $partida2= DB::table('partidas2')->where('estado','Activo')->get();
     return view('partidas.index',['partidas2' => $partidas2]);
   }

=======
         $partida2= DB::table('partidas2')->where('estado','Activo')->get();
        return view('partidas.index',['partidas2' => $partidas2]);
    }
    
>>>>>>> 35395b85cb590e36ed3b54be7799edab5dea2040

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
     $partidas=Partida::findOrFail($id);
     $meses= DB::table('meses')->get(); 
     return view('partidas2.create',['meses' => $meses,'partidas'=>$partidas]);
   }
=======
         return view('partidas2.create');
    }
>>>>>>> 35395b85cb590e36ed3b54be7799edab5dea2040

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
     DB::beginTransaction();


     $partidas= new Partidas2();
     $partidas->idPartida=$request->get('idPartida');
     $partidas->idMes=$request->get('idMes');
     $partidas->presupuestoAsignado=$request->get('presupuestoA');
     $partidas->presupuestoGastado=$request->get('presupuestoG');
     $partidas->save();
     echo $request->get('idPartida');
     $idPartida=$partidas->idPartida;

     $partidas=Partida::findOrFail($idPartida);
     $partidasMensuales=DB::table('partidas2')
     ->join('partidas','partidas2.idPartida','=','partidas.id')
     ->join('meses','partidas2.idMes','=','meses.id')
     ->select('partidas2.*','meses.meses')
     ->where('partidas.estado','=','Activo')
     ->where('idPartida','=',$idPartida)
     ->get();

     DB::commit();
     return view('partida.listaPartidas',["partidas"=>$partidas,"partidasMensuales"=>$partidasMensuales]);    
   }
=======
        $partidas2= new Partidas2();
        $partidas2->numeroPartida=$request->get('numeroPartida');
        $partidas2->concepto=$request->get('concepto');
        $partidas2->estado='Activo';
        $partidas2->save();
        return Redirect::to('partidas');
    }
>>>>>>> 35395b85cb590e36ed3b54be7799edab5dea2040

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
<<<<<<< HEAD
      $partidas=Partidas2::findOrFail($id);
      $meses= DB::table('meses')->get(); 
      return view("partidas2.edit",['meses' => $meses,'partidas'=>$partidas]);
=======
        
        return view("partidas2.edit");
>>>>>>> 35395b85cb590e36ed3b54be7799edab5dea2040
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
<<<<<<< HEAD
      DB::beginTransaction();

      $partidas=Partidas2::findOrFail($id);
      $partidas->idPartida=$request->get('idPartida');
      $partidas->idMes=$request->get('idMes');
      $partidas->presupuestoAsignado=$request->get('presupuestoA');
      $partidas->presupuestoGastado=$request->get('presupuestoG');
      $partidas->update();
      
      $idPartida=$partidas->idPartida;

      $partidas=Partida::findOrFail($idPartida);
      $partidasMensuales=DB::table('partidas2')
      ->join('partidas','partidas2.idPartida','=','partidas.id')
      ->join('meses','partidas2.idMes','=','meses.id')
      ->select('partidas2.*','meses.meses')
      ->where('partidas.estado','=','Activo')
      ->where('idPartida','=',$idPartida)
      ->get();

      DB::commit();
      return view('partida.listaPartidas',["partidas"=>$partidas,"partidasMensuales"=>$partidasMensuales]); 
=======
        //
>>>>>>> 35395b85cb590e36ed3b54be7799edab5dea2040
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
