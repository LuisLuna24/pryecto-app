<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactanos;
use App\Mail\Contacto;
use App\Models\Contactanos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contactanos.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactanos $request)
    {
        Mail::to($request->Correo)->send(new Contacto($request->all()));
        //Redirigir
        return redirect()->route('contactanos.index')->with('info','Mensaje Enviado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contactanos $contactanos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contactanos $contactanos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contactanos $contactanos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contactanos $contactanos)
    {
        //
    }
}
