@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Editar Categorias </h1>

    {!! Form::model($intereses1, [
        'method' => 'PATCH',
        'url' => ['/Intereses', $intereses1->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('tipoInteres') ? 'has-error' : ''}}">
                {!! Form::label('tipoInteres', 'Nombre de la Categoria', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tipoInteres', null, ['class' => 'form-control','required' => 'required']) !!}
                    {!! $errors->first('tipoInteres', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('descripcion', 'Descripcion de la Categoria', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('descripcion', null, ['class' => 'form-control','required' => 'required']) !!}
                    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
            {!! Form::submit('Actualizar', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

</div>
@endsection