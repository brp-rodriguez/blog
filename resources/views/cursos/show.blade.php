@extends('layouts.plantilla')
@section('title','Curso ' . $curso->name)

@section('content')        
        <h1>Bienvenido al curso: {{$curso->name}}</h1>        
        <a href="{{route('cursos.index')}}">Volcer</a>
        <p>Categoria: {{$curso->categoria}}</p>
        <p>Descripcion: {{$curso->descripcion}}</p>
        <br>
        <a href="{{route('cursos.edit',$curso->id)}}">Editar Cursos</a>
        <br>        
        <form action="{{route('cursos.destroy',$curso)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit"> Eliminar </button>
        </form>
@endsection
    
