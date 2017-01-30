@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Empresa {{ $empresa1->id }}
        <a href="{{ url('empresa1/empresa1/' . $empresa1->id . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Usuario"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['empresa1/empresa1', $empresa1->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Borrar',
                    'onclick'=>'return confirm("Confirm delete?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $empresa1->id }}</td>
                </tr>
                <tr><th> Nombre </th><td> {{ $empresa1->nombreEmpresa }} </td></tr><tr><th> Descripcion </th><td> {{ $empresa1->descripcion }} </td></tr><tr><th> Contrasena </th><td> {{ $empresa1->contrasena }} </td></tr><tr><th> Fecha Registro </th><td> {{ $empresa1->fechaRegistro }} </td></tr><tr><th> RFC </th><td> {{ $empresa1->rfc }} </td></tr><tr><th> Rol </th><td> {{ $empresa1->idRol_fk }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
