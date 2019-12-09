<?php

namespace App\Http\Controllers;

use App\Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //se crea un indice del personal 
        $datos['personal']=Personal::paginate(10);
        return view('personal.mostrar', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //llama a la vista ingreso
        return view('personal.ingreso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //valida campos requeridos
        $campos=[ 'Nombres' => 'required|string|max:150',
                  'Apellidos' => 'required|string|max:150',
                  'Direccion' => 'required|string|max:200',
                  'Telefono' => 'required|string|max:10',
                  'Celular' => 'required|string|max:10',
                  'Email' => 'required|string|max:200',
                  'Tipo' => 'required|integer'];
        
        $Mensaje=['required' => 'El campo :attribute es requerido'];
        $this->validate($request,$campos,$Mensaje);
        
        
        //Metodo para guardar datos del personal
        $datosPersonal=request()->except('_token');
        //Para almacenar la Foto
        if($request->hasFile('foto')){
            $datosPersonal['foto']=$request->file('foto')->store('uploads','public');
        }
        //inserta los datos
        Personal::insert($datosPersonal);
        //retorna un json con la información
        //return response()->json($datosPersonal);
        // regreso al index
        return redirect('personal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function show(Personal $personal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //para editar registros
        $persona = Personal::findOrFail($id);
        return view('personal.editar', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //Metodo para guardar datos del personal
        $datosPersonal=request()->except(['_token','_method']);
        if($request->hasFile('foto')){
            //Busca Foto
            $persona = Personal::findOrFail($id);
            //Elimina la Foto
            Storage::delete('public/'.$persona->foto);
            //Carga la nueva foto
            $datosPersonal['foto']=$request->file('foto')->store('uploads','public');
        }
        //Actualiza el registro
        Personal::where('id','=',$id)->update($datosPersonal);
        //Busca los nuevos registros
        $persona = Personal::findOrFail($id);
        //Muestra los nuevos registros
        return view('personal.editar', compact('persona'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //eliminacion de registros
        $personal=Personal::findOrFail($id);

        if(Storage::delete('public/'.$personal->foto)){
            Personal::destroy($id);
        }
        Personal::destroy($id);
        return redirect('personal');
    }
}
