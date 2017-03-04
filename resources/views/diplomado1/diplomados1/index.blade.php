@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Diplomados <a href="{{ url('/Diplomados/create') }}" class="btn btn-primary btn-xs" title="Agregar Diplomado"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a> <a href="{{ url('/pdfdiplomados') }}" class="btn btn-primary btn-xs" title="PDF"><span class="fa fa-file-pdf-o" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Nombre </th><th> Descripcion </th><th> Fecha Inicio </th><th> Fecha Fin </th><th> Costo </th><th> Capacitador </th><th> Cupo </th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($diplomados1 as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombreDiplomado }}</td><td>{{ $item->descripcion }}</td><td>{{ $item->fechaInicio }}</td><td>{{ $item->fechaFin }}</td><td>{{ $item->costo }}</td><td>{{ $item->capacitador }}</td><td>{{ $item->cupoLimite }}</td>
                    <td>
                        <a href="{{ url('/Diplomados/' . $item->id) }}" class="btn btn-success btn-xs" title="Ver Diplomado"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/Diplomados/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Diplomado"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        <a href="{{ url('/Diplomados/' . $item->id . '/imagen') }}" class="btn btn-primary btn-xs" title="Imagen Curso"><span class="glyphicon glyphicon-picture" aria-hidden="true"/></a>
                        <a href="{{ url('/IDiplomados/' . $item->id) }}" class="btn btn-primary btn-xs" title="Inscritos"><span class="glyphicon glyphicon-saved" aria-hidden="true"/></a>

                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/Diplomados', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Borrar Diplomado" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Borrar Diplomado',
                                    'onclick'=>'return confirm("Confirma borrar el Diplomado?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $diplomados1->render() !!} </div>
    </div>

</div>
@endsection
