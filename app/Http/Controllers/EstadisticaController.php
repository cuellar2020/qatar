<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Models\Jugador;

class EstadisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = DB::table('jugador')
        ->orderBy('goles', 'desc')
        ->orderBy('nombre', 'asc')
        ->limit(5)
        ->join('pais','pais.id', '=','jugador.pais')
        ->select('jugador.nombre as nombre','pais.imagen as pais','jugador.goles as goles')
        ->get();

        $jugadoresa = DB::table('jugador')
        ->orderBy('asistencias', 'desc')
        ->orderBy('nombre', 'asc')
        ->limit(5)
        ->join('pais','pais.id', '=','jugador.pais')
        ->select('jugador.nombre as nombre','pais.imagen as pais','jugador.asistencias as asistencias')
        ->get();

        $tarjetasA = DB::table('jugador')
        ->orderBy('tarjetasA', 'desc')
        ->orderBy('nombre', 'asc')
        ->limit(5)
        ->join('pais','pais.id', '=','jugador.pais')
        ->select('jugador.nombre as nombre','pais.imagen as pais','jugador.tarjetasA as tarjetasA')
        ->get();

        $tarjetasR = DB::table('jugador')
        ->orderBy('tarjetasR', 'desc')
        ->orderBy('nombre', 'asc')
        ->limit(5)
        ->join('pais','pais.id', '=','jugador.pais')
        ->select('jugador.nombre as nombre','pais.imagen as pais','jugador.tarjetasR as tarjetasR')
        ->get();

        return view('usuario.estadisticas')->with('jugadores',$jugadores)
        ->with('jugadoresa',$jugadoresa)
        ->with('tarjetasA',$tarjetasA)
        ->with('tarjetasR',$tarjetasR);
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
