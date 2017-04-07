@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Cursos
        <a href="{{ url('Cursos/' . Crypt::encrypt($cursos1->id) . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Curso"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['Cursos', $cursos1->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Borrar Curso',
                    'onclick'=>'return confirm("Confirma borrar el Curso?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $cursos1->id }}</td>
                </tr>
                <tr><th> Nombre </th><td> {{ $cursos1->nombreCurso }} </td></tr>
                <tr><th> Descripcion Corta </th><td> {{ $cursos1->descripcionCorta }} </td></tr>
                <tr><th> Descripcion </th><td> {{ $cursos1->descripcion }} </td></tr>
                <tr><th> Fecha Inicio </th><td> {{ $cursos1->fechaInicio }} </td></tr>
                <tr><th> Fecha Fin </th><td> {{ $cursos1->fechaFin }} </td></tr>
                <tr><th> Hora Inicio </th><td> {{ $cursos1->horaInicio }} </td></tr>
                <tr><th> Hora Fin </th><td> {{ $cursos1->horaFin }} </td></tr>
                <tr><th> Costo </th><td> {{ $cursos1->costo }} </td></tr>
                <tr><th> Capacitador </th><td> {{ $cursos1->capacitador }} </td></tr>
                <tr><th> Cupo </th><td> {{ $cursos1->cupoLimite }} </td></tr>
                <tr><th> Interes </th><td> 
                            @foreach($cats as $item )

                           {{$item->tipoInteres  }}

                            @endforeach
                                
                            

                            </td></tr>
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
