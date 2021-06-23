<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Partido;

use DB;


class AdminPartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jornadas1 = DB::table('partido')
        ->orderBy('fecha', 'asc')
        ->join('pais','pais.id', '=','partido.pais')
        ->join('pais as pais2','pais2.id', '=','partido.pais2')
        ->select('partido.id','pais2.imagen as pais2','pais.imagen as pais1','pais.nombre as nombrep1','pais2.nombre as nombrep2',
        'partido.fecha','partido.estado','partido.resultado')
        ->where('jornada', '=', 1)
        ->get();

        $jornadas2 = DB::table('partido')
        ->orderBy('fecha', 'asc')
        ->join('pais','pais.id', '=','partido.pais')
        ->join('pais as pais2','pais2.id', '=','partido.pais2')
        ->select('partido.id','pais2.imagen as pais2','pais.imagen as pais1','pais.nombre as nombrep1','pais2.nombre as nombrep2',
        'partido.fecha','partido.estado','partido.resultado')
        ->where('jornada', '=', 2)
        ->get();

        $jornadas3 = DB::table('partido')
        ->orderBy('fecha', 'asc')
        ->join('pais','pais.id', '=','partido.pais')
        ->join('pais as pais2','pais2.id', '=','partido.pais2')
        ->select('partido.id','pais2.imagen as pais2','pais.imagen as pais1','pais.nombre as nombrep1','pais2.nombre as nombrep2',
        'partido.fecha','partido.estado','partido.resultado')
        ->where('jornada', '=', 3)
        ->get();

        $jornadas4 = DB::table('partido')
        ->orderBy('fecha', 'asc')
        ->join('pais','pais.id', '=','partido.pais')
        ->join('pais as pais2','pais2.id', '=','partido.pais2')
        ->select('partido.id','pais2.imagen as pais2','pais.imagen as pais1','pais.nombre as nombrep1','pais2.nombre as nombrep2',
        'partido.fecha','partido.estado','partido.resultado')
        ->where('jornada', '=', 4)
        ->get();

        $jornadas7 = DB::table('partido')
        ->orderBy('fecha', 'asc')
        ->join('pais','pais.id', '=','partido.pais')
        ->join('pais as pais2','pais2.id', '=','partido.pais2')
        ->select('partido.id','pais2.imagen as pais2','pais.imagen as pais1','pais.nombre as nombrep1','pais2.nombre as nombrep2',
        'partido.fecha','partido.estado','partido.resultado')
        ->where('jornada', '=', 7)
        ->get();

        $jornadas8 = DB::table('partido')
        ->orderBy('fecha', 'asc')
        ->join('pais','pais.id', '=','partido.pais')
        ->join('pais as pais2','pais2.id', '=','partido.pais2')
        ->select('partido.id','pais2.imagen as pais2','pais.imagen as pais1','pais.nombre as nombrep1','pais2.nombre as nombrep2',
        'partido.fecha','partido.estado','partido.resultado')
        ->where('jornada', '=', 8)
        ->get();

        $jornadas9 = DB::table('partido')
        ->orderBy('fecha', 'asc')
        ->join('pais','pais.id', '=','partido.pais')
        ->join('pais as pais2','pais2.id', '=','partido.pais2')
        ->select('partido.id','pais2.imagen as pais2','pais.imagen as pais1','pais.nombre as nombrep1','pais2.nombre as nombrep2',
        'partido.fecha','partido.estado','partido.resultado')
        ->where('jornada', '=', 9)
        ->get();

        $jornadas10 = DB::table('partido')
        ->orderBy('fecha', 'asc')
        ->join('pais','pais.id', '=','partido.pais')
        ->join('pais as pais2','pais2.id', '=','partido.pais2')
        ->select('partido.id','pais2.imagen as pais2','pais.imagen as pais1','pais.nombre as nombrep1','pais2.nombre as nombrep2',
        'partido.fecha','partido.estado','partido.resultado')
        ->where('jornada', '=', 10)
        ->get();

        $jornadas11 = DB::table('partido')
        ->orderBy('fecha', 'asc')
        ->join('pais','pais.id', '=','partido.pais')
        ->join('pais as pais2','pais2.id', '=','partido.pais2')
        ->select('partido.id','pais2.imagen as pais2','pais.imagen as pais1','pais.nombre as nombrep1','pais2.nombre as nombrep2',
        'partido.fecha','partido.estado','partido.resultado')
        ->where('jornada', '=', 11)
        ->get();

        $jornadas12 = DB::table('partido')
        ->orderBy('fecha', 'asc')
        ->join('pais','pais.id', '=','partido.pais')
        ->join('pais as pais2','pais2.id', '=','partido.pais2')
        ->select('partido.id','pais2.imagen as pais2','pais.imagen as pais1','pais.nombre as nombrep1','pais2.nombre as nombrep2',
        'partido.fecha','partido.estado','partido.resultado')
        ->where('jornada', '=', 12)
        ->get();

        $jornadas13 = DB::table('partido')
        ->orderBy('fecha', 'asc')
        ->join('pais','pais.id', '=','partido.pais')
        ->join('pais as pais2','pais2.id', '=','partido.pais2')
        ->select('partido.id','pais2.imagen as pais2','pais.imagen as pais1','pais.nombre as nombrep1','pais2.nombre as nombrep2',
        'partido.fecha','partido.estado','partido.resultado')
        ->where('jornada', '=', 13)
        ->get();

        $jornadas14 = DB::table('partido')
        ->orderBy('fecha', 'asc')
        ->join('pais','pais.id', '=','partido.pais')
        ->join('pais as pais2','pais2.id', '=','partido.pais2')
        ->select('partido.id','pais2.imagen as pais2','pais.imagen as pais1','pais.nombre as nombrep1','pais2.nombre as nombrep2',
        'partido.fecha','partido.estado','partido.resultado')
        ->where('jornada', '=', 14)
        ->get();

        $jornadas15 = DB::table('partido')
        ->orderBy('fecha', 'asc')
        ->join('pais','pais.id', '=','partido.pais')
        ->join('pais as pais2','pais2.id', '=','partido.pais2')
        ->select('partido.id','pais2.imagen as pais2','pais.imagen as pais1','pais.nombre as nombrep1','pais2.nombre as nombrep2',
        'partido.fecha','partido.estado','partido.resultado')
        ->where('jornada', '=', 15)
        ->get();

        $jornadas16 = DB::table('partido')
        ->orderBy('fecha', 'asc')
        ->join('pais','pais.id', '=','partido.pais')
        ->join('pais as pais2','pais2.id', '=','partido.pais2')
        ->select('partido.id','pais2.imagen as pais2','pais.imagen as pais1','pais.nombre as nombrep1','pais2.nombre as nombrep2',
        'partido.fecha','partido.estado','partido.resultado')
        ->where('jornada', '=', 16)
        ->get();

        $jornadas17 = DB::table('partido')
        ->orderBy('fecha', 'asc')
        ->join('pais','pais.id', '=','partido.pais')
        ->join('pais as pais2','pais2.id', '=','partido.pais2')
        ->select('partido.id','pais2.imagen as pais2','pais.imagen as pais1','pais.nombre as nombrep1','pais2.nombre as nombrep2',
        'partido.fecha','partido.estado','partido.resultado')
        ->where('jornada', '=', 17)
        ->get();

        $jornadas18 = DB::table('partido')
        ->orderBy('fecha', 'asc')
        ->join('pais','pais.id', '=','partido.pais')
        ->join('pais as pais2','pais2.id', '=','partido.pais2')
        ->select('partido.id','pais2.imagen as pais2','pais.imagen as pais1','pais.nombre as nombrep1','pais2.nombre as nombrep2',
        'partido.fecha','partido.estado','partido.resultado')
        ->where('jornada', '=', 18)
        ->get();

        return view('administrador/partido.index')->with('jornadas1',$jornadas1)
        ->with('jornadas2',$jornadas2)
        ->with('jornadas3',$jornadas3)
        ->with('jornadas4',$jornadas4)
        ->with('jornadas7',$jornadas7)
        ->with('jornadas8',$jornadas8)
        ->with('jornadas9',$jornadas9)
        ->with('jornadas10',$jornadas10)
        ->with('jornadas11',$jornadas11)
        ->with('jornadas12',$jornadas12)
        ->with('jornadas13',$jornadas13)
        ->with('jornadas14',$jornadas14)
        ->with('jornadas15',$jornadas15)
        ->with('jornadas16',$jornadas16)
        ->with('jornadas17',$jornadas17)
        ->with('jornadas18',$jornadas18);
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
        $partido= Partido::find($id);
        return view('administrador/partido.edit')->with('partido',$partido);
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
        $partido = Partido::find($id);
        $partido->fecha= $request->get('fecha');
        $partido->jornada= $request->get('jornada');
        $partido->pais= $request->get('pais');
        $partido->pais2= $request->get('pais2');
        $partido->estado= $request->get('estado');
        $partido->resultado= $request->get('resultado');

        $partido->save();

        return redirect('partidosA');
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
