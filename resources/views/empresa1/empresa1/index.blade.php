@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Empresa <a href="{{ url('/empresa1/empresa1/create') }}" class="btn btn-primary btn-xs" title="Add New Empresa1"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Nombre </th><th> Descripcion </th><th> Contrasena </th><th> Fecha Registro </th><th> RFC </th><th> Rol </th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($empresa1 as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombreEmpresa }}</td><td>{{ $item->descripcion }}</td><td>{{ $item->contrasena }}</td><td>{{ $item->fechaRegistro }}</td><td>{{ $item->rfc }}</td><td>{{ $item->idRol_fk }}</td>
                    <td>
                        <a href="{{ url('/empresa1/empresa1/' . $item->id) }}" class="btn btn-success btn-xs" title="View Empresa1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/empresa1/empresa1/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit Empresa1"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/empresa1/empresa1', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Empresa1" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Empresa1',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $empresa1->render() !!} </div>
    </div>

</div>
@endsection
