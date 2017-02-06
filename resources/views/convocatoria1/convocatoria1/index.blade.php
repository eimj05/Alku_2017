@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Convocatorias <a href="{{ url('/convocatoria1/convocatoria1/create') }}" class="btn btn-primary btn-xs" title="Agregar Convocatoria"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a> <a href="{{ url('/pdfconvocatorias') }}" class="btn btn-primary btn-xs" title="PDF"><span class="fa fa-file-pdf-o" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Nombre Convocatoria </th><th> Descripcion </th><th> Tipo Convocatoria </th><th> Dependencia </th><th> Fecha Cierre </th><th> Imagen </th><th> Contacto </th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($convocatoria1 as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombreConvocatoria }}</td><td>{{ $item->descripcion }}</td><td>{{ $item->tipoConvocatoria }}</td><td>{{ $item->dependencia }}</td><td>{{ $item->fechaCierre }}</td><td>{{ $item->imagen }}</td><td>{{ $item->contacto }}</td>
                    <td>
                        <a href="{{ url('/convocatoria1/convocatoria1/' . $item->id) }}" class="btn btn-success btn-xs" title="Ver Convocatoria"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/convocatoria1/convocatoria1/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Convocatoria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        <a href="{{ url('/convocatoria1/convocatoria1/' . $item->id . '/imagen') }}" class="btn btn-primary btn-xs" title="Imagen Diplomado"><span class="glyphicon glyphicon-picture" aria-hidden="true"/></a>

                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/convocatoria1/convocatoria1', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Borrar Convocatoria" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Borrar Convocatoria',
                                    'onclick'=>'return confirm("Confirma borrar la Convocatoria?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $convocatoria1->render() !!} </div>
    </div>

</div>
@endsection
