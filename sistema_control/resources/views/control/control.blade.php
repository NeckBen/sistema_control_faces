@extends('layouts.app')

@section('content')
<div class="container">

    <form class="navbar-form navbar-left pull-right"  method="get" role="search" style="display:inline">
    <button type="submit" class="btn btn-info">Buscar</button>
        <div class="form-group">
            <input type="text" name="nombre" class="form-control" placeholder="Busqueda por Nombres..">        
        </div>
        
    </form>

    <div>
        <button type="submit" class="btn btn-dark">Tomar Foto</button>
        <button type="submit" class="btn btn-dark">Abrir Puerta</button>
        <button type="submit" class="btn btn-dark">Cerrar Puerta</button>
    </div>


    <div>
        <br>
        <button type="submit" class="btn btn-dark">Acceso Programado</button>

        <label class="control-label" >{{'Desde'}}</label>
        <input type="date" value="">
        <input type="time" value="">

        <label class="control-label" >{{'Hasta'}}</label>
        <input type="date" value="">
        <input type="time" value="">
    </div>
    
    <div>
        <br>
        <form action="http://192.168.1.6:8090/restarDevice" method="post">
            <input type="hidden" mane ="pass" value="12345678">
            <input type="submit" class="btn btn-dark" value="Reiniciar">
        </form>
    </div>

    <div>
        <br>
        <form action="http://192.168.1.6:8090/openDoorControl" method="post">
            <input type="submit" class="btn btn-dark" value="Open Door">
        </form>
    </div>

</div>
@endsection