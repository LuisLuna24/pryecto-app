<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJuego;
use App\Models\Juegos;
use Illuminate\Http\Request;

class JuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Juegos paginados
        $juegos = Juegos::paginate(10);
        return view("juegos/index",compact("juegos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("juegos/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJuego $request)
    {

        //Insercion de datos 1
        /*
        $juegos = new Juegos();
        $juegos->nombre = $request->nombre;

        $juegos->save();
        */
        //Insercion de datos 3
        /*
        $juego = Juegos::create([
            "nombre" => $request->nombre
        ]);
        */

        //Insercion de datos 3

        $juego=Juegos::create($request->all());

        return redirect()->route("juegos.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Juegos $juego)
    {
         //consulta a la tala juegos
         $juego = Juegos::find($juego->id);
         return view("juegos/show", compact("juego"));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Juegos $juego)
    {
        return view("juegos/edit", compact("juego"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Juegos $juego)
    {
        //Validasion
        $request->validate([
            "nombre" => "required|min:3|unique:juegos,nombre,".$juego->id
        ]);

        //Actualizacion
        /*
        $juegos->nombre = $request->nombre;
        $juegos->save();
        return redirect()->route("juegos.index");
        */
        //Actualizacion Masiba 
        $juego->update($request->all());

        return redirect()->route("juegos.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Juegos $juego)
    {
        $juego->delete();
        return redirect()->route("juegos.index");
    }
}
