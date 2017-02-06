@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Interes
        <a href="{{ url('Intereses/' . $intereses1->id . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Interes"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['Intereses', $intereses1->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Borrar Interes',
                    'onclick'=>'return confirm("Confirma Borrar el Interes?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $intereses1->id }}</td>
                </tr>
                <tr><th> TipoInteres </th><td> {{ $intereses1->tipoInteres }} </td></tr><tr><th> Descripcion </th><td> {{ $intereses1->descripcion }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
