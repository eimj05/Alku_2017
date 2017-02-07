@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Editar Curso</h1>

    {!! Form::model($cursos1, [
        'method' => 'PATCH',
        'url' => ['/Cursos', $cursos1->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nombreCurso') ? 'has-error' : ''}}">
                {!! Form::label('nombreCurso', 'Nombre Curso', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nombreCurso', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nombreCurso', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('descripcion', 'Descripcion', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fechaInicio') ? 'has-error' : ''}}">
                {!! Form::label('fechaInicio', 'Fecha Inicio', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fechaInicio', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fechaInicio', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fechaFin') ? 'has-error' : ''}}">
                {!! Form::label('fechaFin', 'Fecha Fin', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fechaFin', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fechaFin', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('horaInicio') ? 'has-error' : ''}}">
                {!! Form::label('horaInicio', 'Hora Inicio', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('time', 'horaInicio', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('horaInicio', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('horaFin') ? 'has-error' : ''}}">
                {!! Form::label('horaFin', 'Hora Fin', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('time', 'horaFin', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('horaFin', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('costo') ? 'has-error' : ''}}">
                {!! Form::label('costo', 'Costo', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('costo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('costo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('capacitador') ? 'has-error' : ''}}">
                {!! Form::label('capacitador', 'Capacitador', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('capacitador', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('capacitador', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cupoLimite') ? 'has-error' : ''}}">
                {!! Form::label('cupoLimite', 'Cupo Limite', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('cupoLimite', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cupoLimite', '<p class="help-block">:message</p>') !!}
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