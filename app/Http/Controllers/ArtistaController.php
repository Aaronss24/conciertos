<?php

namespace App\Http\Controllers;
use App\Models\Artista;

use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artistas = Artista::all();
        return view('artistas.list_artistas',compact("artistas"));
    }
}
