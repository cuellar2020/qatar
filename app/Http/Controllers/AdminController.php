<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sede;

use DB;

class AdminController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sedes = DB::table('sede')
        ->orderBy('nombre', 'asc')
        ->join('pais','pais.id', '=','sede.pais')
        ->select('sede.id as id','sede.imagen as imagen','sede.nombre as nombre','pais.imagen as pais','pais.nombre as nombrep')
        ->get();

        return view('administrador/sede.index')->with('sedes',$sedes);
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
        $sede = Sede::find($id);
        return view('administrador/sede.edit')->with('sede',$sede);
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
        $sede = Sede::find($id);
        $sede->imagen = $request->get('imagen');
        $sede->nombre= $request->get('nombre');
        $sede->pais = $request->get('pais');

        $sede->save();

        return redirect('sedesA');
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
