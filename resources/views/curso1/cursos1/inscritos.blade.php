@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Personas Pre-Inscritas al Curso {{ $cursos1->nombreCurso}} </h1>

    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Nombre </th><th> Email </th><th> Telefono </th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            {{-- */$x=0;/* --}}
            @foreach($cliente as $item)
                {{-- */$x++;/* --}}
                <tr>       
                    <td>{{ $x }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->telefono }}</td>
                    <td>
                           
                            {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/ICursos', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Cursos1" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Borrar Registrado',
                                    'onclick'=>'return confirm("Confirma borrar el usuario registrado al curso?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

</div>
@endsection
