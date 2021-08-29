@extends('layouts.plantilla')

@section('title','Home')

@section('content')
        <h1>Lista de Cursos en blade del INDEx</h1>
        @foreach ($cursos as $curso)
                <li>{{$curso->name}}</li>    
        @endforeach
        {{$cursos->links()}}
@endsection
