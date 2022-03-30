<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Concierto;
use App\Models\Provincia;
use App\Models\Artista;

class ConciertoController extends Controller
{
    public function __constructor(){
        $this->middleware('can:admin.conciertos.index')->only('index');
        $this->middleware('can:admin.conciertos.create')->only('create','store');
        $this->middleware('can:admin.conciertos.edit')->only('edit','update');
        $this->middleware('can:admin.conciertos.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conciertos = Concierto::all();
        $provincias = Provincia::all();
        $artistas = Artista::all();
        return view('admin.conciertos.list_conciertos',compact("conciertos","provincias","artistas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $concierto = new Concierto;
        $title = __("Añadir concierto");
        $textButton = __("Añadir");
        $route = route("admin.conciertos.store");
        $provincias = Provincia::all();
        $artistas = Artista::all();
        return view("admin.conciertos.create", compact("title", "textButton", "route", "concierto","provincias","artistas"));
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
            "provincia_id" => "required",
            "artista_id" => "required",
            "fechacelebracion" => "required",
            "informacion" => "nullable|string|min:10",
            "precio" => "required"
        ]);
        Concierto::create($request->only("provincia_id","artista_id","fechacelebracion","informacion","precio"));

        return redirect(route("admin.conciertos.index"))
        ->with("success",__("Concierto creado!"));
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
    public function edit(Concierto $concierto)
    {
        $update = true;
        $title = __("Editar Concierto");
        $textButton = __("Actualizar");
        $route = route("admin.conciertos.update", ["concierto" => $concierto]);
        $provincias = Provincia::all();
        $artistas = Artista::all();
        return view("admin.conciertos.edit", compact("update","title","textButton","route","concierto","provincias","artistas"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Concierto $concierto)
    {
        $this->validate($request, [
            "provincia_id" => "required",
            "artista_id" => "required",
            "informacion" => "nullable|string|min:10",
            "fechacelebracion" => "required",
            "precio" => "required"
        ]);
        $concierto->fill($request->only("provincia_id", "artista_id", "informacion", "fechacelebracion", "precio"))->save();
        return redirect(route("admin.conciertos.index"))
            ->with("success",__("Concierto actualizado!"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Concierto $concierto)
    {
        $concierto->delete();
        return back()->with("success",__("¡Concierto eliminado!"));
    }
}
