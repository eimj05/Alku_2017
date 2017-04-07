@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Crear Convocatoria</h1>
    <hr/>

    {!! Form::open(['url' => '/Convocatorias', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('nombreConvocatoria') ? 'has-error' : ''}}">
                {!! Form::label('nombreConvocatoria', 'Nombre Convocatoria', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombreConvocatoria', null, ['class' => 'form-control','required' => 'required']) !!}
                    {!! $errors->first('nombreConvocatoria', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
           
             <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('descripcionCorta', 'Descripcion Corta', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('descripcionCorta', null, ['class' => 'form-control','required' => 'required']) !!}
                    {!! $errors->first('descripcionCorta', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
             <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('descripcion', 'Descripcion', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('descripcion', null, ['class' => 'form-control','required' => 'required']) !!}
                    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('tipoConvocatoria') ? 'has-error' : ''}}">
                {!! Form::label('tipoConvocatoria', 'Tipo Convocatoria', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tipoConvocatoria', null, ['class' => 'form-control','required' => 'required']) !!}
                    {!! $errors->first('tipoConvocatoria', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dependencia') ? 'has-error' : ''}}">
                {!! Form::label('dependencia', 'Dependencia', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('dependencia', null, ['class' => 'form-control','required' => 'required']) !!}
                    {!! $errors->first('dependencia', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fechaCierre') ? 'has-error' : ''}}">
                {!! Form::label('fechaCierre', 'Fecha Cierre', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fechaCierre', null, ['class' => 'form-control','required' => 'required']) !!}
                    {!! $errors->first('fechaCierre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('contacto') ? 'has-error' : ''}}">
                {!! Form::label('contacto', 'Contacto', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('contacto', null, ['class' => 'form-control','required' => 'required']) !!}
                    {!! $errors->first('contacto', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('intereses') ? 'has-error' : ''}}">
                     {!! Form::label('intereses','Interes',['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                    {{ Form::select('interes', $intereses) }}
                    {!! $errors->first('intereses', '<p class="help-block">:message</p>') !!}
                   </div>  
            </div>

             <div class="form-group {{ $errors->has('ubicacion') ? 'has-error' : ''}}">
                     {!! Form::label('ubicacion','Ubicacion',['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                    {{ Form::select('ubicacion', $ubicacion) }}

                    {!! $errors->first('ubicacion', '<p class="help-block">:message</p>') !!}
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