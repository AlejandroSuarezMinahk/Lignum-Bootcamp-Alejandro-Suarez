@extends('layouts.plantillabase');

@section('contenido')
<a href="actores/create" class="btn btn-primary">Agregar actor</a>

<table class="table table-dark table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha de nacimiento</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($actores as $actor)
        <tr>
            <td>{{$actor->id}}</td>
            <td>{{$actor->Nombre}}</td>
            <td>{{$actor->FechaNacimiento}}</td>
            <td>
                <form action="{{ route ('actores.destroy', $actor->id)}}" method="POST">
                    <a href="/actores/{{$actor->id}}/edit" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
<a href="/peliculas" class="btn btn-primary">Ver sección de peliculas</a>
@endsection