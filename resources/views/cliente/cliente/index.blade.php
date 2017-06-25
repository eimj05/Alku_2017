@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Usuarios <a href="{{ url('Usuarios/create') }}" class="btn btn-primary btn-xs" title="Agregar Usuario"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a> </h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Nombre </th><th> Direccion </th><th> Telefono </th><th> Email </th><th> Rol </th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($cliente as $item )
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->direccion }}</td>
                    <td>{{ $item->telefono }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        @foreach($roles as $rol)
                        
                        @if($rol->cliente_id ==  $item->id)
                            {{ $rol->roles1_id }}
                        @endif
                        @endforeach
                    </td>
                    

                    <td>
                        <a href="{{ url('/Usuarios/' . $item->id) }}" class="btn btn-success btn-xs" title="Ver Usuario"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/Usuarios/' . ($item->id) . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Usuario"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>


                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/Usuarios', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Borrar Usuario" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Borrar Usuario',
                                    'onclick'=>'return confirm("Confirma borrar el Usuario?")'
                            ));!!}
                        {!! Form::close() !!}

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $cliente->render() !!} </div>
    </div>

</div>
@endsection
