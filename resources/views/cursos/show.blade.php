@extends('layouts.plantilla')
@section('title','Curso ' . $curso->name)

@section('content')        
        <h1>Bienvenido al curso: {{$curso->name}}</h1>        
        <p><strong>Categoria: {{$curso->categoria}}</strong></p>
        <p><strong>Descripcion: {{$curso->descripcion}}</strong></p>
        <br>
        <a href="{{route('cursos.edit',$curso->id)}}">Editar Cursos</a>
        <br>        
        <a href="{{route('cursos.index')}}">Volcer</a>
@endsection
    
