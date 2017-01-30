@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Cursos <a href="{{ url('/curso1/cursos1/create') }}" class="btn btn-primary btn-xs" title="Agregar Curso"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a> <a href="{{ url('/pdfcursos') }}" class="btn btn-primary btn-xs" title="PDF"><span class="fa fa-file-pdf-o" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Nombre </th><th> Descripcion </th><th> Fecha Inicio </th><th> Fecha Fin </th> <th> Hora Inicio </th><th> Hora Fin </th><th> Costo </th><th> Capacitador </th><th> Cupo </th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($cursos1 as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombreCurso }}</td><td>{{ $item->descripcion }}</td><td>{{ $item->fechaInicio }}</td><td>{{ $item->fechaFin }}</td><td>{{ $item->horaInicio }}</td><td>{{ $item->horaFin }}</td><td>{{ $item->costo }}</td><td>{{ $item->capacitador }}</td><td>{{ $item->cupoLimite }}</td>
                    <td>
                        <a href="{{ url('/curso1/cursos1/' . $item->id) }}" class="btn btn-success btn-xs" title="Ver Curso"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/curso1/cursos1/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Curso"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        <a href="{{ url('/curso1/cursos1/' . $item->id . '/imagen') }}" class="btn btn-primary btn-xs" title="Imagen Curso"><span class="glyphicon glyphicon-picture" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/curso1/cursos1', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Cursos1" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Borrar Curso',
                                    'onclick'=>'return confirm("Confirma borrar el Curso?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $cursos1->render() !!} </div>
    </div>

</div>
@endsection
