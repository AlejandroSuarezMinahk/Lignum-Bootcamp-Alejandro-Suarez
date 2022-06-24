<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;


class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actores = Actor::all();
        return view('actor.index')->with('actores',$actores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        /* Validación del formulario
        El objeto $request se encarga de recoger los datos del fomulario,        
        entonces lo utilizamos junto con el metodo validate para poner
        reglas que necesitamos que se cumplan. En caso de no cumplirse,
        redirecciona a la misma página.
        Sintaxis: 'id' => 'regla'
        */
        $request->validate([
            'Nombre'=> 'required',
            'FechaNacimiento'=> 'required|min:01-01-1900|max:24-06-2022'
        ]);

        $actor = new Actor();
        $actor->Nombre = $request->get('Nombre');
        $actor->FechaNacimiento = $request->get('FechaNacimiento');

        $actor->save();
        return redirect('/actores');
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
        $actor = Actor::find($id);
        return view('actor.edit')->with('actor',$actor);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $request->validate([
            'Nombre'=> 'required',
            'FechaNacimiento'=> 'required'
        ]);

        $actor = Actor::find($id);
        
        $actor->Nombre = $request->get('Nombre');
        $actor->FechaNacimiento = $request->get('FechaNacimiento');
        
        $actor->save();
        return redirect('/actores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actor = Actor::find($id);
        $actor->delete();
        return redirect('/actores');
    }
}
