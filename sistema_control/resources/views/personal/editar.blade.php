@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif

<h2>MODIFICACIÓN DE PERSONAL</h2>

<form action="{{ url('/personal/'.$persona->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}

<div class="form-group">
    <label for="nombres" class="control-label">{{'Nombres'}}</label>
    <input type="text" class="form-control" name="nombres" id="nombres" value="{{ $persona->nombres}}">
</div>

<div class="form-group">
    <label for="apellidos" class="control-label">{{'Apellidos'}}</label>
    <input type="text" class="form-control" name="apellidos" id="apellidos" value="{{ $persona->apellidos}}">

<div class="form-group">
    <label for="direccion" class="control-label">{{'Direccion'}}</label>
    <input type="text" class="form-control" name="direccion" id="direccion" value="{{ $persona->direccion}}">

<div class="form-group">
    <label for="telefono" class="control-label">{{'Teléfono'}}</label>
    <input type="text" class="form-control" name="telefono" id="telefono" value="{{ $persona->telefono}}">

<div class="form-group">
    <label for="celular" class="control-label">{{'Celular'}}</label>
    <input type="text" class="form-control" name="celular" id="celular" value="{{ $persona->celular}}">

<div class="form-group">
    <label for="email" class="control-label">{{'Email'}}</label>
    <input type="mail" class="form-control" name="email" id="email" value="{{ $persona->email}}">

<div class="form-group">
    <label for="tipo" class="control-label">{{'Tipo'}}</label>
    <!-- <input type="number" class="form-control" name="tipo" id="tipo" value="{{ $persona->tipo}}"> -->

    <select>
        <option value="1">Tutor</option>
        <option value="2">Estudiante</option>
    </select>
    
    <br>
    <label for="foto">{{'Foto'}}</label>
    <br>
    <img src="{{ asset('storage').'/'.$persona->foto}}" alt="" width="200">
    <br>
    <input type="file" name="foto" id="foto" value="">
<br>

<div>
    <input type="submit" class="btn btn-dark" value="Tomar Foto">
    <input type="submit" class="btn btn-success" value="Guardar">
    <a href="{{ url('personal') }} " class="btn btn-info">Regresar</a>
</div>
</form>

</div>
@endsection