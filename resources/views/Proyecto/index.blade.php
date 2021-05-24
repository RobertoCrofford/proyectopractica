@extends('layouts.plantilla')
@section('tile','home')

@section('Content')
    <h1>bienvenido al index</h1>
    <a href="{{route('proyecto.create')}}">crear curso</a>
    <ul>
        @foreach ($clase as $mostrar)
            <li>
                <a href="{{route('proyecto.show', $mostrar->id)}}">{{$mostrar->name}}</a>
            </li>
        @endforeach
</ul>
{{$clase->links()}}
@endsection