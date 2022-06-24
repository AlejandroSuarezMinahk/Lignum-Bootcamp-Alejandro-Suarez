@extends('layouts.plantillabase');

@section('contenido')
<h1>Agregar nuevo actor</h1>
    <form action="/actores" method="POST">
    @csrf
    <div>
        <label for="" class="form-label">Nombre:</label>
        <input id="Nombre" name="Nombre" type="text" class="form-control" tabindex="1" value="{{old('Nombre')}}">
    </div>
    @error('Nombre')    
    <small>*{{$message}}</small>
    <br>
    @enderror
    <div>
        <label for="" class="form-label">Fecha de nacimiento:</label>
        <input id="FechaNacimiento" name="FechaNacimiento" type="date" class="form-control" tabindex="2" value="{{old('FechaNacimiento')}}" >
    </div>
    @error('FechaNacimiento')    
    <small>*{{$message}}</small>
    <br>
    @enderror
    <a href="/actores" class="btn btn-secondary" tabindex="4">Cancelar</a>
    <button type="reset" class="btn btn-warning" tabindex="5">Limpiar</button>
    <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>    
</form>
@endsection