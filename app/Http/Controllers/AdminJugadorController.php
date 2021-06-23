<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Models\Jugador;

class AdminJugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jugadores = DB::table('jugador')
        ->orderBy('nombre', 'asc')
        ->join('pais','pais.id', '=','jugador.pais')
        ->select('jugador.id','jugador.nombre as nombre','pais.imagen as pais','jugador.posicion as posicion','pais.nombre as nombrep')
        ->get();

        return view('administrador/jugador.index')->with('jugadores',$jugadores);
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
        $jugador = Jugador::find($id);
        return view('administrador/jugador.edit')->with('jugador',$jugador);
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
        $jugador= Jugador::find($id);
        $jugador->nombre = $request->get('nombre');
        $jugador->posicion= $request->get('posicion');
        $jugador->pais= $request->get('pais');
        $jugador->goles= $request->get('goles');
        $jugador->asistencias= $request->get('asistencias');
        $jugador->tarjetasA= $request->get('tarjetasA');
        $jugador->tarjetasR= $request->get('tarjetasR');

        $jugador->save();

        return redirect('jugadoresA');
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
