<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artista;

class ArtistaController extends Controller
{
    public function __constructor(){
        $this->middleware('can:admin.artistas.index')->only('index');
        $this->middleware('can:admin.artistas.create')->only('create','store');
        $this->middleware('can:admin.artistas.edit')->only('edit','update');
        $this->middleware('can:admin.artistas.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artistas = Artista::all();
        return view('admin.artistas.list_artistas',compact("artistas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artista = new Artista;
        $title = __("Añadir artista");
        $textButton = __("Añadir");
        $route = route("admin.artistas.store");
        return view("admin.artistas.create", compact("title", "textButton", "route", "artista"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "nombre" => "required",
            "informacion" => "nullable|string|min:10"
        ]);
        Artista::create($request->only("nombre","informacion"));

        return redirect(route("admin.artistas.index"))
        ->with("success",__("Artista creado!"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Artista $artista)
    {
        $update = true;
        $title = __("Editar Artista");
        $textButton = __("Actualizar");
        $route = route("admin.artistas.update", ["artista" => $artista]);
        return view("admin.artistas.edit", compact("update","title","textButton","route","artista"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artista $artista)
    {
        $this->validate($request, [
            "nombre" => "required",
            "informacion" => "nullable|string|min:10"
        ]);
        $artista->fill($request->only("nombre", "informacion"))->save();
        return redirect(route("admin.artistas.index"))
        ->with("success",__("Artista actualizado!"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artista $artista)
    {
        $artista->delete();
        return back()->with("success",__("Artista eliminado!"));
    }
}
