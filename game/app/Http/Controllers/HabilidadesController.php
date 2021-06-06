<?php

namespace App\Http\Controllers;

use App\Models\habilidades;
use Illuminate\Http\Request;

class HabilidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['habilidades']=habilidades::paginate(5);
        return view('habilidad.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('habilidad.create');
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
        $datosHabilidad = request()->except('_token');

        if($request->hasFile('Foto')){
            $datosHabilidad['Foto']=$request->file('Foto')->store('uploads','public');
        }

        habilidades::insert($datosHabilidad);

        return response()->json($datosHabilidad);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\habilidades  $habilidades
     * @return \Illuminate\Http\Response
     */
    public function show(habilidades $habilidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\habilidades  $habilidades
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $habilidad=habilidades::findOrFail($id);
        return view('habilidad.edit', compact('habilidad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\habilidades  $habilidades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosHabilidad = request()->except(['_token','_method']); 

        if($request->hasFile('Foto')){             
            $habilidad=habilidades::findOrFail($id);

            Storage::delete('public/'.$habilidad->Foto);

            $datosHabilidad['Foto']=$request->file('Foto')->store('uploads','public');         
        }  


        habilidades::where('id','=',$id)->update($datosHabilidad);         
        $habilidad=habilidades::findOrFail($id);                 
        return redirect('habilidad')->with('mensaje','habilidad Modificada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\habilidades  $habilidades
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        habilidades::destroy($id);
        return redirect('habilidad');
    }
}
