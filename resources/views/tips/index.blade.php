@extends('layouts.app')

@section('main-content')
<div class="container">

 @if(Session::has('message'))
<div class="alert alert-info">
{{Session::get('message')}}
</div>
@endif

    <h1>Tips <a href="{{ url('/Tips/create') }}" class="btn btn-primary btn-xs" title="Agregar Curso"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a> </h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Tip </th><th> Descripcion </th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($tips1 as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->tip }}</td><td>{{ $item->tdesc }}</td>
                    <td>
                        <a href="{{ url('/Tips/' . ($item->id)) }}" class="btn btn-success btn-xs" title="Ver Tip"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/Tips/' . ($item->id) . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Tip"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        <a href="{{ url('/Tips/' . ($item->id) . '/imagen') }}" class="btn btn-primary btn-xs" title="Imagen Tip"><span class="glyphicon glyphicon-picture" aria-hidden="true"/></a>
                       
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/Tips', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Cursos1" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Borrar Curso',
                                    'onclick'=>'return confirm("Confirma borrar el Tip?")'
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
