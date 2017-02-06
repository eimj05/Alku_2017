@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Intereses <a href="{{ url('/Intereses/create') }}" class="btn btn-primary btn-xs" title="Agregar Interes"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Tipo de Interes </th><th> Descripcion </th><th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($intereses1 as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->tipoInteres }}</td><td>{{ $item->descripcion }}</td>
                    <td>
                        <a href="{{ url('/Intereses/' . $item->id) }}" class="btn btn-success btn-xs" title="Ver Interes"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/Intereses/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Interes"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/Intereses', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Borrar Interes" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Borar Interes',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ));!!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $intereses1->render() !!} </div>
    </div>

</div>
@endsection
