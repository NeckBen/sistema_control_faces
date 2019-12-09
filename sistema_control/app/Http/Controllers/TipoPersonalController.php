<?php

namespace App\Http\Controllers;

use App\Tipo_Personal;
use Illuminate\Http\Request;

class TipoPersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //llama a la vista ingreso
        return view('parametrizacion.ingreso_tipo_personal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipo_Personal  $tipo_Personal
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo_Personal $tipo_Personal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipo_Personal  $tipo_Personal
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo_Personal $tipo_Personal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo_Personal  $tipo_Personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo_Personal $tipo_Personal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipo_Personal  $tipo_Personal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo_Personal $tipo_Personal)
    {
        //
    }
}
