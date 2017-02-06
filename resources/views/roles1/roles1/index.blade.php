@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Roles <a href="{{ url('/Roles/create') }}" class="btn btn-primary btn-xs" title="Agregar Rol"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> TipoRol </th><th> Descripcion </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($roles1 as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->tipoRol }}</td><td>{{ $item->descripcion }}</td>
                    <td>
                        <a href="{{ url('/Roles/' . $item->id) }}" class="btn btn-success btn-xs" title="Ver Rol"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/Roles/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Rol"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/Roles', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Borrar Rol" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Borrar Rol',
                                    'onclick'=>'return confirm("Confirma borrar el Rol?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $roles1->render() !!} </div>
    </div>

</div>
@endsection
