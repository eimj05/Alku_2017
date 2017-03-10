@extends('layouts.app')

@section('main-content')
<div class="container">

     @if(Session::has('message'))
    <div class="alert alert-info">
    {{Session::get('message')}}
    </div>
    @endif

    <h1>Crear Usuario</h1>
    <hr/>

    {!! Form::open(['url' => '/Usuarios', 'class' => 'form-horizontal']) !!}


                <div class="form-group {{ $errors->has('nombre') ? 'has-error' : ''}}">
                {!! Form::label('name', 'Nombre', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
                {!! Form::label('direccion', 'Direccion', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
                {!! Form::label('telefono', 'Telefono', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'Email', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('rfc') ? 'has-error' : ''}}">
                {!! Form::label('rfc', 'RFC', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('rfc', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('rfc', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
          

                <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('password', 'Contraseña', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="password"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
            </div>

            <div class="form-group {{ $errors->has('roles') ? 'has-error' : ''}}">
                     {!! Form::label('roles','Rol',['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                    {{ Form::select('roles', $roles) }}

                    {!! $errors->first('roles', '<p class="help-block">:message</p>') !!}
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