<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pais;

use DB;


class AdminPaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paises = DB::table('pais')
        ->orderBy('puntos', 'desc')
        ->get();
        return view('administrador/pais.index')->with('paises',$paises);
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
        $pais= Pais::find($id);
        return view('administrador/pais.edit')->with('pais',$pais);
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
        $pais = Pais::find($id);
        $pais->imagen = $request->get('imagen');
        $pais->nombre= $request->get('nombre');
        $pais->partidosJ = $request->get('partidosJ');
        $pais->ganados = $request->get('ganados');
        $pais->empatados = $request->get('empatados');
        $pais->perdidos = $request->get('perdidos');
        $pais->golesF = $request->get('golesF');
        $pais->golesC = $request->get('golesC');
        $pais->golesD = $request->get('golesD');
        $pais->puntos = $request->get('puntos');

        $pais->save();

        return redirect('posicionesA');
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
