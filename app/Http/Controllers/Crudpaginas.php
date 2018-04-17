<?php

namespace App\Http\Controllers;

use App\Publicacion;

use Illuminate\Http\Request;

class Crudpaginas extends Controller
{
    public function inicio()
    {
        $publicaciones = Publicacion::all();
    	return view('home', compact('publicaciones'));
    }

    public function saludo($nombre = "Invitado")
    {
    	$consolas=[
		"Play Station 4",
		"Xbox One",
		"Wii U",
		];
    	return view('saludo', compact('nombre','consolas'));
    }
}
