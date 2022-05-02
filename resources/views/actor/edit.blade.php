@extends('layouts.plantillabase');

@section('contenido')
<h1>Editar actor</h1>
<form action="/actores/{{$actor->id}}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="" class="form-label">Nombre:</label>
        <input id="Nombre" name="Nombre" type="text" class="form-control" value="{{$actor->Nombre}}">
    </div>
    <div>
        <label for="" class="form-label">Fecha de nacimiento:</label>
        <input id="FechaNacimiento" name="FechaNacimiento" type="date" class="form-control" value="{{$actor->FechaNacimiento}}">
    </div>
    <a href="/actores" class="btn btn-secondary" tabindex="4">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="3">Actualizar</button>

</form>
@endsection