@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Edit Empresa1 {{ $empresa1->id }}</h1>

    {!! Form::model($empresa1, [
        'method' => 'PATCH',
        'url' => ['/empresa1/empresa1', $empresa1->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nombreEmpresa') ? 'has-error' : ''}}">
                {!! Form::label('nombreEmpresa', 'Nombreempresa', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombreEmpresa', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nombreEmpresa', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('descripcion', 'Descripcion', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('contrasena') ? 'has-error' : ''}}">
                {!! Form::label('contrasena', 'Contrasena', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('contrasena', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('contrasena', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fechaRegistro') ? 'has-error' : ''}}">
                {!! Form::label('fechaRegistro', 'Fecharegistro', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fechaRegistro', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fechaRegistro', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('rfc') ? 'has-error' : ''}}">
                {!! Form::label('rfc', 'Rfc', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('rfc', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('rfc', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('idRol_fk') ? 'has-error' : ''}}">
                {!! Form::label('idRol_fk', 'Idrol Fk', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('idRol_fk', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('idRol_fk', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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