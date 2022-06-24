<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Models\Actor;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('pelicula.index')->with('peliculas',$peliculas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actores = Actor::all();
        return view('pelicula.create',compact('actores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Titulo'=> 'required',
            'Año'=> 'required',
            'Duración'=>'required',
            'Sinopsis'=> 'required',
            'ActorPrincipalID'=> 'required',
            'imagen'=>'required'
        ]);

        $peliculas = new Pelicula();

        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $destinationPath = 'images/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destinationPath, $filename);
            $peliculas->imagenes = $destinationPath . $filename;

        }

        $peliculas->Año = $request->get('Año');
        $peliculas->Titulo = $request->get('Titulo');
        $peliculas->Duración = $request->get('Duración');
        $peliculas->Sinopsis = $request->get('Sinopsis');
        $peliculas->ActorPrincipalID = $request->get('ActorPrincipalID');

        $peliculas->save();
        return redirect('/peliculas');
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
        $pelicula = Pelicula::find($id);
        return view('pelicula.edit')->with('pelicula', $pelicula);
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

        $pelicula = Pelicula::find($id);

        $pelicula->Año = $request->get('Año');
        $pelicula->Titulo = $request->get('Titulo');
        $pelicula->Duración = $request->get('Duración');
        $pelicula->Sinopsis = $request->get('Sinopsis');
        $pelicula->ActorPrincipalID = $request->get('ActorPrincipalID');

        $pelicula->save();
        return redirect('/peliculas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelicula = Pelicula::find($id);
        $pelicula->delete();
        return redirect('/peliculas');
    }
}
