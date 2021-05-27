@extends('layouts.plantilla')
@section('tile','create')

@section('Content')
    <h1>bienvenido para crear</h1>
    <form action="{{route('proyecto.store')}}" method="POST">
        @csrf
        
        <label >
            <br>
            Nombre: 
            <br>
            <input type="text" name="name"  >
        </label>

            @error('name')
                <br>
                    <small>*{{$message}}</small>
                <br>
            @enderror

        <label >
            <br>
            Descripcion:
            <br> 
            <textarea name="descripcion"  rows="5"></textarea>
        </label>

             @error('descripcion')
                  <br>
                    <small>*{{$message}}</small>
                  <br>
            @enderror

        <label >
            <br>
            Categoria:
            <br>
            <input type="text" name="categoria" >
        </label>

            @error('categoria')
              <br>
                <small>*{{$message}}</small>
              <br>
            @enderror
        <br>
        <button type="submit">Enviar Formulario</button>
    </form>
@endsection