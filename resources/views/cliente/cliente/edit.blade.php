@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Editar Usuario</h1>

    {!! Form::model($cliente, [
        'method' => 'PATCH',
        'url' => ['/cliente/cliente', $cliente->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
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

         <div class="form-group {{ $errors->has('roles') ? 'has-error' : ''}}">
                     {!! Form::label('roles','Rol',['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
                    {{ Form::select('roles', $roles) }}

                    {!! $errors->first('roles', '<p class="help-block">:message</p>') !!}
                   </div>  
                </div>


             <div class="form-group {{ $errors->has('intereses') ? 'has-error' : ''}}">
                     {!! Form::label('intereses','Intereses',['class' => 'col-sm-3 control-label']) !!}
                    <div class="col-sm-6">
              
                    {{ Form::select('intereses[]', $intereses, null, array('multiple' => true))}}

                    {!! $errors->first('intereses', '<p class="help-block">:message</p>') !!}
                   </div>  
</div>



    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
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