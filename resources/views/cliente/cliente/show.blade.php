@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Detalle Usuario
        <a href="{{ url('cliente/cliente/' . Crypt::encrypt($cliente->id) . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Usuario"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['cliente/cliente', $cliente->id],
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

                <tr><th> Rol </th><td> <ul>
                            @foreach($roles as $rol )

                           <li>{{$rol->tipoRol  }}</li> 

                            @endforeach
                                
                            </ul>

                            </td></tr>

                <tr><th> Intereses </th><td> <ul>
                            @foreach($intereses as $interes )

                           <li>{{$interes->tipoInteres  }}</li> 

                            @endforeach
                                
                            </ul>

                            </td></tr>

            </tbody>
        </table>
        
    </div>

</div>
@endsection
