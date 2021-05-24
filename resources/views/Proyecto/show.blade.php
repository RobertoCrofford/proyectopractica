@extends('layouts.plantilla')
@section('tile','home' .$curso->name)

@section('Content')
    <a href="{{route('proyecto.index')}}">Volver al curso</a>
    <h1>bienvenido {{$curso->name}}</h1>
    <p><strong>Categoria</strong>{{$curso->categoria}}</p>
    <p><strong>Descripcion</strong>{{$curso->descripcion}}</p>
@endsection