@extends('layouts.auth')

@section('htmlheader_title')
    Registro
@endsection

@section('content')


    <body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url('/home') }}"><b>Alku</b> Registro</a>
        </div>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="register-box-body">
         
           <p class="login-box-msg"> Registrate como Usuario </p>

           <!--  <div class="form-box" >
            <p>El Password debe contener al menos 3 caracteres de c/u de las siguientes categorias:</p>
            <li>Mayusculas (A - Z)</li>
            <li>Minusculas (a - z)</li>
            <li>Numeros (0 - 9)</li>
            <li>Caracteres Especiales: (!, $, #, %, @)</li>
            <p></p>
            </div> -->
            <form action="{{ url('/register') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="{{ trans('adminlte_lang::message.fullname') }}" name="name" value="{{ old('name') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email" value="{{ old('email') }}"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password" id="clave"  />
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.retrypepassword') }}" name="password_confirmation"/>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>

               
<div>
                <div class="row">
                    <div class="col-xs-1">
                        <label>
                            <div class="checkbox_register icheck">
                                <label>
                                    <input type="checkbox" name="terms">
                                </label>
                            </div>
                        </label>
                    </div><!-- /.col -->
                    


                    <div class="col-xs-10">
                        <div class="form-group">
                            <button type="button" class="btn btn-block btn-flat" data-toggle="modal" data-target="#termsModal">Estoy de acuerdo con las condiciones</button>
                        </div>
                    </div><!-- /.col -->

                    </div>

               <!--  <div class="col-xs-10" align="center">
                            {!! app('captcha')->display(); !!}
                        </div>-->

                    <div class="col-xs- col-xs-push-1">
                        <button align="center" type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte_lang::message.register') }}</button>
                    </div><!-- /.col -->    
                </div>
                
            </form>

            @include('auth.partials.social_login')
<p>
            <a href="{{ url('/login') }}" class="text-center"> Ya soy Usuario</a>
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    @include('layouts.partials.scripts_auth')

    @include('auth.terms')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
<!-- 
    <script>
    jQuery.fn.fortalezaClave = function(){
        $(this).each(function(){
            elem = $(this);
            //creo el elemento HTML para el mensaje
            msg = $('<span class="fortaleza">No segura</span>');
            //inserto el mensaje en la página, justo después del campo input password
            elem.after(msg)
            //almaceno la referencia del elemento del mensaje dentro del campo input
            elem.data("mensaje", msg);
            
            elem.keyup(function(e){
                elem = $(this);
                //recupero la referencia al elemento del mensaje 
                msg = elem.data("mensaje")
                //miro la fortaleza
                //extraigo el atributo value del campo input password
                claveActual = elem.attr("value");
                var fortalezaActual = "";
                //saco la fortaleza en función de los caracteres que tenga la clave
                if (claveActual.length < 5){
                    fortalezaActual = "No segura";
                }else{
                    if(claveActual.length < 8){
                        fortalezaActual = "Medianamente segura";
                    }else{
                        fortalezaActual = "Segura";
                    }
                }
                //cambio el texto del elemento mensaje para mostrar la fortaleza actual
                msg.html(fortalezaActual);
            });
        });
        return this;
    }
    
    //cuando la página esté lista, cargo la funcionalidad del plugin sobre el elemento password
    $(document).ready(function(){
        $("#clave").fortalezaClave();
    });
    </script>
    -->

</body>

@endsection
