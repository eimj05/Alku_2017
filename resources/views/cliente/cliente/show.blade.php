@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Detalle Usuario
        <a href="{{ url('Usuarios/' . ($cliente->id) . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Usuario"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['Usuarios', $cliente->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Borrar Usuario',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $cliente->id }}</td>
                </tr>
                <tr><th> Nombre </th><td> {{ $cliente->name }} </td></tr>
                <tr><th> Direccion </th><td> {{ $cliente->direccion }} </td></tr>
                <tr><th> Telefono </th><td> {{ $cliente->telefono }} </td></tr>
                <tr><th> Email </th><td> {{ $cliente->email }} </td></tr>
                <tr><th> Rfc </th><td> {{ $cliente->rfc }} </td></tr>


                <tr><th> Rol </th><td> 
                            @foreach($roles as $rol )

                           {{$rol->tipoRol  }}

                            @endforeach
                                
                           

                            </td></tr>

                

                

            </tbody>
        </table>
        
    </div>

</div>
@endsection
