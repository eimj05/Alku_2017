@extends('layouts.app')

@section('main-content')

@include('alerts.success')


<div class="container">

    <h1>Enviar Email </h1>

    <hr/>
		{!!Form::open(['route'=>'mail.store','method'=>'POST','class' => 'form-horizontal'])!!}


            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Remitente', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    <input name="name" class="form-control" type="text" readonly="" value="{{$cliente->name}}">
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'Destinatario', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!!Form::text('email', null, ['class' => 'form-control'])!!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mensaje') ? 'has-error' : ''}}">
                {!! Form::label('mensaje', 'Mensaje', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!!Form::textarea('mensaje', null, ['class' => 'form-control'])!!}
                    {!! $errors->first('mensaje', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
    
    		<div class="form-group">
        		<div class="col-sm-offset-3 col-sm-3">
            		{!! Form::submit('Enviar', ['class' => 'btn btn-primary form-control']) !!}
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



