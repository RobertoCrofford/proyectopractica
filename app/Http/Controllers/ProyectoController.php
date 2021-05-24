<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index()
{
    $clase = Proyecto::paginate(5);
    
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

public function store($id)
{
    
}

}

//Aqui hay comunicacion de la web donde estan las rutas 