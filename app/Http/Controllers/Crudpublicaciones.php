<?php

namespace App\Http\Controllers;

use DB;

use App\Publicacion;

use Carbon\Carbon;

use Illuminate\Http\Request;

use App\Http\Requests\CreaMensajeRequest;

class Crudpublicaciones extends Controller
{

    function __construct()
    {
        $this->middleware('auth',['except'=>['store']]);
    }  
      

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = Publicacion::all();
        return view('publicaciones.index', compact('publicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('publicaciones.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreaMensajeRequest $request)
    {
        //Guardar publicación
        Publicacion::create($request->all());
        //Redireccionar
        return redirect()->route('publicaciones.create')->with('info','Hemos recibido tu publicación, deberá ser validada para aparecer en el inicio');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Publicacion::findOrFail($id);
        return view('publicaciones.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Publicacion::findOrFail($id);
        return view('publicaciones.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Actualizar
        $request->file('image')->store('public');
        $post = Publicacion::findOrFail($id);
        $post->image = $request->file('image')->store('public');
        $post->update($request->all());
        
        //Redireccionar
        return redirect()->route('publicaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar post con id = $id
        Publicacion::findOrFail($id)->delete();
        //Redireccionamos
        return redirect()->route('publicaciones.index');
    }
}
