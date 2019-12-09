@extends('layouts.app')
@section('content')

<div class="container">

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')
}}
@endif
<a href="{{ url('personal/create') }}" class="btn btn-success">Nuevo</a>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>Id</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Celular</th>
            <th>Email</th>
            <th>Tipo</th>
            <th>Foto</th>
        </tr>
    </thead>
    <tbody>
        @foreach($personal as $persona)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$persona->nombres}}</td>
            <td>{{$persona->apellidos}}</td>
            <td>{{$persona->direccion}}</td>
            <td>{{$persona->telefono}}</td>
            <td>{{$persona->celular}}</td>
            <td>{{$persona->email}}</td>
            <td>{{$persona->tipo}}</td>
            <td> <img src="{{ asset('storage').'/'.$persona->foto}}" alt="" width="100"></td>

            <td>
                <a class="btn btn-warning" href="{{ url('/personal/'.$persona->id.'/edit')}}" >Editar</a>

                <form method="post" action="{{ url('/personal/'.$persona->id)}}" style="display:inline">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button class="btn btn-danger" type="submit" onclick="return confirm('¿Desea Borrar el Registro?');">Borrar</button>            
                </form>     
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div>
@endsection
