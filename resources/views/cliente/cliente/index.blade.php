@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Usuarios <a href="{{ url('/cliente/cliente/create') }}" class="btn btn-primary btn-xs" title="Agregar Usuario"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a> <a href="{{ url('/pdfusuarios') }}" class="btn btn-primary btn-xs" title="PDF"><span class="fa fa-file-pdf-o" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Nombre </th><th> Direccion </th><th> Telefono </th><th> Email </th><th>Admin</th><th>Empresa</th><th>Usuario</th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($cliente as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->direccion }}</td>
                    <td>{{ $item->telefono }}</td>
                    <td>{{ $item->email }}</td>
                    <td><input type="checkbox" {{$item->hasRole('Admin') ? 'checked' : ''}} name="role_admin"></td>
                    <td><input type="checkbox" {{$item->hasRole('Empresa') ? 'checked' : ''}} name="role_empresa"></td>
                    <td><input type="checkbox" {{$item->hasRole('RegUser') ? 'checked' : ''}} name="role_reguser"></td>

                    <td>
                        <a href="{{ url('/cliente/cliente/' . Crypt::encrypt($item->id)) }}" class="btn btn-success btn-xs" title="Ver Usuario"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/cliente/cliente/' . Crypt::encrypt($item->id) . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Usuario"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/cliente/cliente', $item->id],
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
