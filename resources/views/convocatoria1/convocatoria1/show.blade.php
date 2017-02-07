@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Convocatorias
        <a href="{{ url('Convocatorias/' . $convocatoria1->id . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Convocatoria"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['Convocatorias', $convocatoria1->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Borrar Convocatoria',
                    'onclick'=>'return confirm("Confirma borrar la Convocatoria?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $convocatoria1->id }}</td>
                </tr>
                <tr><th> Nombre Convocatoria </th><td> {{ $convocatoria1->nombreConvocatoria }} </td></tr>
                <tr><th> Descripcion </th><td> {{ $convocatoria1->descripcion }} </td></tr>
                <tr><th> Tipo Convocatoria </th><td> {{ $convocatoria1->tipoConvocatoria }} </td></tr>
                <tr><th> Dependencia </th><td> {{ $convocatoria1->dependencia }} </td></tr>
                <tr><th> Fecha Cierre </th><td> {{ $convocatoria1->fechaCierre }} </td></tr>
                <tr><th> Imagen </th><td> {{ $convocatoria1->imagen }} </td></tr>
                <tr><th> Contacto </th><td> {{ $convocatoria1->contacto }} </td></tr>
                <tr><th> Ubicacion </th><td> 
                            @foreach($ubicaciones as $ubicacion )

                           {{$ubicacion->title  }}

                            @endforeach
                                
                            

                            </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
