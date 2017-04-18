@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Editar Tip</h1>

    {!! Form::model($tips1, [
        'method' => 'PATCH',
        'url' => ['/Tips', $tips1->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nombreCurso') ? 'has-error' : ''}}">
                {!! Form::label('tip', 'Tip', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tip', null, ['class' => 'form-control','required' => 'required']) !!}
                    {!! $errors->first('tip', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('descripcion') ? 'has-error' : ''}}">
                {!! Form::label('tdesc', 'Descripcion', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tdesc', null, ['class' => 'form-control','required' => 'required']) !!}
                    {!! $errors->first('tdesc', '<p class="help-block">:message</p>') !!}
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