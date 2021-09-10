@extends('layouts.plantilla')

@section('title','Contactanos')

@section('content') 
    <h1>
        Dejanos un mensaje 
    </h1>
    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        
    

        <label>
            Nombre
            <br>
            <input type="text" name="name">
        </label>
        
        @error('name')
            <br>
            <strong>{{$message}}</strong>
            <br>
        @enderror



        <br>
        <label>
            Correo:
            <br> 
            <input type="text" name="correo">
            <br>
        </label>
        @error('correo')
           <strong>{{$message}}</strong>         
        @enderror
        
        <label>
            Mensaje:
            <br> 
            <textarea rows="4" name="mensaje" ></textarea>
            <br>
        </label>
        <br>
        @error('mensaje')
           <strong>{{$message}}</strong>         
        @enderror 
        <br>
        <button type="submit"> Enviar Mensaje    </button>
    </form>

    @if (session('info'))
        <script>
            alert("{{session('info')}}")
        </script>
    @endif
@endsection
