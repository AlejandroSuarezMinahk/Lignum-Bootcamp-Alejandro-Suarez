@extends('layouts.plantillabase');
<script src="{{asset('search/js/search.js')}}" type="module"></script>

@section('contenido')
<a href="peliculas/create" class="btn btn-primary">Agregar película</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Año</th>
            <th scope="col">Titulo</th>
            <th scope="col">Duración</th>
            <th scope="col">Sinopsis</th>
            <th scope="col">Actor principal</th>
            <th scope="col">imagen</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($peliculas as $pelicula)
        <tr>
            <td>{{$pelicula->id}}</td>
            <td>{{$pelicula->Año}}</td>
            <td>{{$pelicula->Titulo}}</td>
            <td>{{$pelicula->Duración}}</td>
            <td>{{$pelicula->Sinopsis}}</td>
            <td>{{$pelicula->ActorPrincipalId}}</td>
            <td>
                <img src="{{$pelicula->imagenes}}" class="img-fluid" width="120px"></img>
            </td>
            <td>
                <form action="{{ route ('peliculas.destroy', $pelicula->id)}}" method="POST">
                    <a href="/peliculas/{{$pelicula->id}}/edit" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
                
            </td>
        </tr>
        @endforeach
    </tbody>
    <div class="search"><input type="text" id="mysearch" class="form-control"  placeholder="Buscar una película"></div>
    <ul id="showlist" tabindex='1' class="list-group"></ul>
</table>
<a href="/actores" class="btn btn-primary">Ver sección de actores</a>
@endsection
