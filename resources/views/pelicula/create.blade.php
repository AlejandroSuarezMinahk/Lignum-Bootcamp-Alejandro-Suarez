@extends('layouts.plantillabase');

@section('contenido')
<h1>Crear nueva película</h1>
    <form action="/peliculas" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="" class="form-label">Año:</label>
        <input id="Año" name="Año" type="number" class="form-control" tabindex="1">
    </div>
    <div>
        <label for="" class="form-label">Titulo:</label>
        <input id="Titulo" name="Titulo" type="text" class="form-control" tabindex="2">
    </div>
    <div>
        <label for="" class="form-label">Duración:</label>
        <input id="Duración" name="Duración" type="time" class="form-control" tabindex="3">
    </div>
    <div>
        <label for="" class="form-label">Sinopsis:</label>
        <input id="Sinopsis" name="Sinopsis" type="text" class="form-control" tabindex="4">
    </div>
    <div>
        <label for="" class="form-label">Actor Principal:</label>
        <input id="ActorPrincipalID" name="ActorPrincipalID" type="number" class="form-control" tabindex="5">
    </div>
    <div>
        <label for="imagen" class="form-label">imagen:</label>
        <input id="imagen" name="imagen" type="file" class="form-control" tabindex="6">
    </div>
    <a href="/peliculas" class="btn btn-secondary" tabindex="8">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>

</form>
@endsection