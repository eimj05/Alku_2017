@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Ubicaciones<a href="{{ url('ubicacion/create') }}" class="btn btn-primary btn-xs" title="Agregar Ubicacion"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th> Titulo </th><th> Latitud </th><th> Longuitud </th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($ubicacion as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->lat }}</td>
                    <td>{{ $item->lng }}</td>
                   
                    <td>
                        <a href="{{ url('/ubicacion/' . $item->id) }}" class="btn btn-success btn-xs" title="Ver Ubicacion"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <!--<a href="{{ url('/cliente/cliente/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Editar Usuario"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>-->
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/ubicacion', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Borrar Ubicación" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Borrar Ubicacion',
                                    'onclick'=>'return confirm("Confirma borrar la Ubicacion?")'
                            ));!!}
                        {!! Form::close() !!}

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $ubicacion->render() !!} </div>
    </div>

</div>
@endsection
