@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Crear Interes</h1>
    <hr/>

    {!! Form::open(['url' => 'Intereses', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('tipoInteres') ? 'has-error' : ''}}">
                {!! Form::label('tipoInteres', 'Tipointeres', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tipoInteres', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('tipoInteres', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('descripcion', 'Descripcion', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Crear', ['class' => 'btn btn-primary form-control']) !!}
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