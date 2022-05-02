@extends('layouts.plantillabase');

@section('contenido')
<h1>Editar peliculas</h2>
<form action="/peliculas/{{$pelicula->id}}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label for="" class="form-label">Año:</label>
        <input id="Año" name="Año" type="number" class="form-control" value="{{$pelicula->Año}}">
    </div>
    <div>
        <label for="" class="form-label">Titulo:</label>
        <input id="Titulo" name="Titulo" type="text" class="form-control" value="{{$pelicula->Titulo}}">
    </div>
    <div>
        <label for="" class="form-label">Duración:</label>
        <input id="Duración" name="Duración" type="time" class="form-control" value="{{$pelicula->Duración}}">
    </div>
    <div>
        <label for="" class="form-label">Sinopsis:</label>
        <input id="Sinopsis" name="Sinopsis" type="text" class="form-control" value="{{$pelicula->Sinopsis}}">
    </div>
    <div>
        <label for="" class="form-label">Actor Principal:</label>
        <input id="ActorPrincipalID" name="ActorPrincipalID" type="number" class="form-control" value="{{$pelicula->ActorPrincipalID}}">
    </div>
    <a href="/peliculas" class="btn btn-secondary" tabindex="7">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Actualizar</button>

</form>
@endsection