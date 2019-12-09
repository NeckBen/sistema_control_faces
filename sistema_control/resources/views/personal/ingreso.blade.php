@extends('layouts.app')
@section('content')
<div class="container">

    @if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $errors}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h2>INGRESO DE PERSONAL</h2>

    <form action="{{ url('/personal')}}" class="form-horizontal" method="post" enctype="multipart/form-data">

    {{ csrf_field() }}

        <div class="form-group">
            <label for="nombres" class="control-label" >{{'Nombres'}}</label>
            <input type="text" class="form-control" name="nombres" id="nombres" value="">
        </div>

        <div class="form-group">
            <label for="apellidos" class="control-label">{{'Apellidos'}}</label>
            <input type="text" class="form-control" name="apellidos" id="apellidos" value="">
        </div>

        <div class="form-group">
            <label for="direccion" class="control-label">{{'Dirección'}}</label>
            <input type="text" class="form-control" name="direccion" id="direccion" value="">
        </div>

        <div class="form-group">
            <label for="telefono" class="control-label">{{'Teléfono'}}</label>
            <input type="text" class="form-control" name="telefono" id="telefono" value="">
        </div>

        <div class="form-group">
            <label for="celular" class="control-label">{{'Celular'}}</label>
            <input type="text" class="form-control" name="celular" id="celular" value="">
        </div>

        <div class="form-group">
            <label for="email" class="control-label">{{'Email'}}</label>
            <input type="mail" class="form-control" name="email" id="email" value="">
        </div>

        <div class="form-group">
            <label for="tipo" class="control-label">{{'Tipo'}}</label>
            <!-- <input type="number" class="form-check-label" name="tipo" id="tipo" value=""> -->
            <select>
                <option value="1">Tutor</option>
                <option value="2">Estudiante</option>
            </select>
        </div>

        <div class="form-group">
            <label for="foto" class="control-label">{{'Foto'}}</label>
            <input type="file"  name="foto" id="foto" value="">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Aceptar">
            <a href="{{ url('home') }}" class="btn btn-info">Salir</a>
        </div>
    </form>
</div>
@endsection