@extends('layouts.plantilla')
@section('tile','edit')

@section('Content')
    <h1>bienvenido para Editar</h1>
    <form action="{{route('Proyecto.update',$proyect)}}" method="POST">
        @csrf
        
        @method('put')

        <label >
            <br>
            Nombre: 
            <br>
            <input type="text" name="name" value="{{$proyect->name}}">
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
            <textarea name="descripcion"  rows="5" >
                {{$proyect->descripcion}}
            </textarea>
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
            <input type="text" name="categoria" value="{{$proyect->categoria}}">
        </label>

          @error('categoria')
             <br>
                  <small>*{{$message}}</small>
             <br>
          @enderror
        <br>
        <button type="submit">Editar Formulario</button>
    </form>
@endsection