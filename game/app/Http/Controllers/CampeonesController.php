<?php

namespace App\Http\Controllers;

use App\Models\campeones;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class CampeonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['campeones']=campeones::paginate(5);
        return view('campeon.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('campeon.create');
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
        $datosCampeon = request()->except('_token');

        if($request->hasFile('Foto')){
            $datosCampeon['Foto']=$request->file('Foto')->store('uploads','public');
        }

        campeones::insert($datosCampeon);

        //return response()->json($datosCampeon);
        return redirect('campeon')->with('mensaje','Campeon agregado con exito.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\campeones  $campeones
     * @return \Illuminate\Http\Response
     */
    public function show(campeones $campeones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\campeones  $campeones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $campeon=campeones::findOrFail($id);
        return view('campeon.edit', compact('campeon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\campeones  $campeones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosCampeon = request()->except(['_token','_method']); 

        if($request->hasFile('Foto')){             
            $campeon=campeones::findOrFail($id);

            Storage::delete('public/'.$campeon->Foto);

            $datosCampeon['Foto']=$request->file('Foto')->store('uploads','public');         
        }  


        campeones::where('id','=',$id)->update($datosCampeon);         
        $campeon=campeones::findOrFail($id);                 
        return redirect('campeon')->with('mensaje','Campeon Modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\campeones  $campeones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $campeon=campeones::findOrFail($id);

        if(Storage::delete('public/'.$campeon->Foto)){

            campeones::destroy($id);
        }

        
        return redirect('campeon')->with('mensaje','Campeon eliminado con exito.');
    }
}
