@extends('layouts.plantilla')

@section('title','Home')

@section('content')        
        <h1>Lista de Cursos en blade del INDEx</h1>
        <a href="{{route('cursos.create')}}">Crear Curso</a>
        @foreach ($cursos as $curso)
                <li>
                        <a href="{{route('cursos.show',$curso->id)}}">{{$curso->name}}</a>                        
                </li>     
        @endforeach
        {{$cursos->links()}}
@endsection
