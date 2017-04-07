@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Tips
        <a href="{{ url('Tips/' . ($tips1->id) . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Curso"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['Tips', $tips1->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Borrar Curso',
                    'onclick'=>'return confirm("Confirma borrar el Tip?")'
            ));!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr><th>ID</th><td>{{ $tips1->id }}</td></tr>
                <tr><th> Tip </th><td> {{ $tips1->tip }} </td></tr>
                <tr><th> Descripcion </th><td> {{ $tips1->tdesc }} </td></tr>
            </tbody>
        </table>
    </div>

</div>
@endsection
