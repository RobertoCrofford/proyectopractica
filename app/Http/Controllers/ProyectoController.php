<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
{
    $clase = Proyecto::orderBy('id','desc')->paginate(5);
    
    return view('Proyecto.index',compact('clase'));
}

public function create()
{
    return view('Proyecto.create');
}

public function show($id)
{
    $curso= Proyecto::find($id);

    
    return view('Proyecto.show', compact('curso'));
}

public function edit($id)
{
    $proyect = Proyecto::find($id);

    return view('Proyecto.edit',compact('proyect'));
}

public function update(Request $request, Proyecto $curso)
{
    //$curso = Proyecto::find($curso);

    //return view('Proyecto.edit',compact('proyect'));
    $request->validate([

        'name' =>'required',
        'descripcion' =>'required',
        'categoria' =>'required'
    ]);

    $curso->name = $request->name;
    $curso->descripcion = $request->descripcion;
    $curso->categoria = $request->categoria;

    $curso->save();
    return redirect()->route('proyecto.show',$curso->id);
}

public function store(Request $request)
{

    $request->validate([

        'name' =>'required|max:10',
        'descripcion' =>'required|min:10',
        'categoria' =>'required'
    ]);
    $proyec = new Proyecto();

    $proyec->name = $request->name;
    $proyec->descripcion = $request->descripcion;
    $proyec->categoria = $request->categoria;

    $proyec->save();
    return redirect()->route('proyecto.show',$proyec->id);
}

}

//Aqui hay comunicacion de la web donde estan las rutas 