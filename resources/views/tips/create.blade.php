@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Crear Tips</h1>
    <hr/>

    {!! Form::open(['url' => '/Tips', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('tip') ? 'has-error' : ''}}">
                {!! Form::label('tip', 'Tip', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tip', null, ['class' => 'form-control','required' => 'required']) !!}
                    {!! $errors->first('tip', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tdesc') ? 'has-error' : ''}}">
                {!! Form::label('tdesc', 'Descripcion', ['class' => 'col-sm-3 control-label'])  !!}
                <div class="col-sm-6" >
                    {!! Form::text('tdesc', null, ['class' => 'form-control','required' => 'required']) !!}
                    {!! $errors->first('tdesc', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-6">
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