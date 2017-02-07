@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Diplomados
        <a href="{{ url('Diplomados/' . $diplomados1->id . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Diplomado"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['Diplomados', $diplomados1->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Borrar Diplomado',
                    'onclick'=>'return confirm("Confirma borrar el Diplomado?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $diplomados1->id }}</td>
                </tr>
                <tr><th> Nombre </th><td> {{ $diplomados1->nombreDiplomado }} </td></tr>
                <tr><th> Descripcion </th><td> {{ $diplomados1->descripcion }} </td></tr>
                <tr><th> Fecha Inicio </th><td> {{ $diplomados1->fechaInicio }} </td></tr>
                <tr><th> Fecha Fin </th><td> {{ $diplomados1->fechaFin }} </td></tr>
                <tr><th> Costo </th><td> {{ $diplomados1->costo }} </td></tr>
                <tr><th> Capacitador </th><td> {{ $diplomados1->capacitador }} </td></tr>
                <tr><th> Cupo </th><td> {{ $diplomados1->cupoLimite }} </td></tr>
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
