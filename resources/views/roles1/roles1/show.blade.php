@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Detalle Rol 
        <a href="{{ url('Roles/' . $roles1->id . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Rol"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['Roles', $roles1->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Borrar Rol',
                    'onclick'=>'return confirm("Confirma borrar el Rol?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $roles1->id }}</td>
                </tr>
                <tr><th> TipoRol </th><td> {{ $roles1->tipoRol }} </td></tr><tr><th> Descripcion </th><td> {{ $roles1->descripcion }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
