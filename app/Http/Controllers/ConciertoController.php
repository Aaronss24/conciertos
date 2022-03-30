<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concierto;
use App\Models\Provincia;
use App\Models\Artista;

class ConciertoController extends Controller
{
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
        return view('conciertos.list_conciertos',compact("conciertos","provincias","artistas"));
    }
}
