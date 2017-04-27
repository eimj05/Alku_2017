<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alku</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="/fcss/css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="/fcss/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="/fcss/css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="/fcss/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/fcss/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="fcss/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="fcss/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="fcss/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="fcss/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="fcss/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="fcss/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="fcss/img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->

    <link href="/fcss/css/owl.carousel.css" rel="stylesheet">
    <link href="/fcss/css/owl.theme.css" rel="stylesheet">
</head>

<body>

    <div id="all">

        <header>

            <!-- *** TOP ***
_________________________________________________________ -->
            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-5 contact">
                            <p class="hidden-sm hidden-xs">Contactanos al 999 217 7056 o alku@ph3.com.mx.</p>
                            <p class="hidden-md hidden-lg"><a href="#" data-animate-hover="pulse"><i class="fa fa-phone"></i></a>  <a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </p>
                        </div>
                    
                            <div class="login">
                                @if (Auth::guest())
                                <a href="{{ url('/login') }}"><i class="fa fa-sign-in"></i> <span class="hidden-xs text-uppercase">Iniciar Sesion</span></a>
                                <a href="{{ url('/register') }}"><i class="fa fa-user"></i> <span class="hidden-xs text-uppercase">Registro</span></a>
                                @else
                                <a href="{{ url('Fperfil', Auth::user()) }}">
                                <img src="/uploads/avatars/{{ Auth::user()->avatar }}" class="img-circle" alt="User Image" width="25" height="25" border="0" />
                                </a>
                                <a href="{{ url('Fperfil', Auth::user()) }}">{{ Auth::user()->name }}</a> 
                                <a href="/logout"><i class="fa fa-sign-out"></i> Salir   </a>
                             
                                @endif
                            </div>

                        </div>  
                    </div>
                </div>
            </div>

            <!-- *** TOP END *** -->

            <!-- *** NAVBAR ***
    _________________________________________________________ -->

            <div class="navbar-affixed-top" data-spy="affix" data-offset-top="200">

                <div class="navbar navbar-default yamm" role="navigation" id="navbar">

                    <div class="container">
                        <div class="navbar-header">

                            <a class="navbar-brand home" href="/">
                                <img src="/fcss/img/logo.png" alt="Universal logo" class="hidden-xs hidden-sm">
                                <img src="/fcss/img/logo-small.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>
                            </a>
                            <div class="navbar-buttons">
                                <button type="button" class="navbar-toggle btn-template-main" data-toggle="collapse" data-target="#navigation">
                                    <span class="sr-only">Toggle navigation</span>
                                    <i class="fa fa-align-justify"></i>
                                </button>
                            </div>
                        </div>
                        <!--/.navbar-header -->

                        <div class="navbar-collapse collapse" id="navigation">

                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown active">
                                    <a href="/" class="btn btn-link" >Inicio </a>
                                </li>
                           
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portafolio <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="/fcss/img/template-homepage.png" class="img-responsive hidden-xs" alt="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Portafolio</h5>
                                                        <ul>
                                                            <li><a href="{{ url('Fcursoslist') }}">Cursos</a>
                                                            </li>
                                                            <li><a href="{{ url('Fdiplomadoslist') }}">Diplomados</a>
                                                            </li>
                                                            <li><a href="{{ url('Fconvocatoriaslist') }}">Convocatorias</a>
                                                            </li>
                                                        
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Acerca de...</h5>
                                                        <ul>
                                                            <li><a href="{{ url('Facerca') }}">Acerca de Nosotros</a>
                                                            </li>
                                 
                                        
                                                            <li><a href="{{ url('Fservicios') }}">Nuestros Servicios</a>
                                                            </li>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                              

                                <li class="dropdown">
                                    <a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">Contacto <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ url('Fcontacto') }}">Contactanos</a>
                                        </li>
                                

                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <!--/.nav-collapse -->



                        <div class="collapse clearfix" id="search">

                            <form class="navbar-form" role="search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">

                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>

                </span>
                                </div>
                            </form>

                        </div>
                        <!--/.nav-collapse -->

                    </div>


                </div>
                <!-- /#navbar -->

            </div>

            <!-- *** NAVBAR END *** -->

        </header>

    

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Perfil del Usuario</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="/">Inicio</a>
                            </li>
                            <li>Perfil del Usuario</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">
                <section>
                    <div class="row">

                        <div class="col-md-12 clearfix">

                            <div id="text-page">


                                <div class="row">
                                    <div class="col-md-4">
                                        <p class="text-center">
                                            <img src="" class="img-circle img-responsive" alt="">
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="text-center">
                                            <img src="/uploads/avatars/{{ Auth::user()->avatar }}" class="img-circle img-responsive" alt="">
                                        </p>

                                    </div>
                                    <div class="col-md-4">
                                        <p class="text-center">
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <form enctype="multipart/form-data" action="/profile" method="POST">
                                        <input type="file" name="avatar">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <br>
                                        <input type="submit" value="Actualizar Imagen" class="pull-center btn btn-sm btn-primary">
                                         </form>
                                        </p>
                                    </div>

                                </div>

                                <br>
                                <h1>Actualiza tus datos</h1>

                                @if(Session::has('message'))
                                <div class="alert alert-info">
                                {{Session::get('message')}}
                                </div>
                                @endif

                                <br>


                             {!! Form::model($cliente, [
                                    'method' => 'PATCH',
                                    'url' => ['Fperfil', Auth::user()->id],
                                    'class' => 'form-horizontal'
                                ]) !!}

                                            <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                                            {!! Form::label('name', 'Nombre', ['class' => 'col-sm-3 control-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::text('name', null, ['class' => 'form-control','required' => 'required']) !!}
                                                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                        <div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
                                            {!! Form::label('direccion', 'Direccion', ['class' => 'col-sm-3 control-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::text('direccion', null, ['class' => 'form-control','required' => 'required']) !!}
                                                {!! $errors->first('direccion', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                        <div class="form-group {{ $errors->has('telefono') ? 'has-error' : ''}}">
                                            {!! Form::label('telefono', 'Telefono', ['class' => 'col-sm-3 control-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::number('telefono', null, ['class' => 'form-control','required' => 'required']) !!}
                                                {!! $errors->first('telefono', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                                            {!! Form::label('email', 'Email', ['class' => 'col-sm-3 control-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::email('email', null, ['class' => 'form-control','required' => 'required']) !!}
                                                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                        <div class="form-group {{ $errors->has('direccion') ? 'has-error' : ''}}">
                                            {!! Form::label('rfc', 'RFC', ['class' => 'col-sm-3 control-label']) !!}
                                            <div class="col-sm-6">
                                                {!! Form::text('rfc', null, ['class' => 'form-control']) !!}
                                                {!! $errors->first('rfc', '<p class="help-block">:message</p>') !!}
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



                                <hr>

                               

                            </div>


                        </div>
                        <!-- /.col-md-12 -->
                    </div>
                    <!-- /.row -->
                </section>
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->


        <!-- *** GET IT ***
_________________________________________________________ -->

        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                    <h3>¿Te gustaria unirte a nuestro equipo y publicar tus Cursos o Diplomados?</h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a href="/Fcontacto" class="btn btn-template-transparent-primary">Dejanos un mensaje</a>
                </div>
            </div>
        </div>


        <!-- *** GET IT END *** -->


        <!-- *** FOOTER ***
_________________________________________________________ -->

        <footer id="footer">
        <div class="container" >
              


            <div class="container" >
                <div class="col-md-6 col-sm-6">
                    <h4>Acerca de Nosotros</h4>

                    <p>PH3 es una empresa joven creada en Mérida, Yucatán., en el 2017 y el giro es el desarrollo de aplicaciones Web y Móviles. La aplicación desarrollada para este sitio es ALKU, una plataforma de vinculación de Cursos, Diplomados y Convocatorias.</p>


                    
                        <!-- /input-group -->
                

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
               
                <!-- /.col-md-3 -->

                <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">
                    <h4></h4>

                    <p></p>


                    
                        <!-- /input-group -->
                

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <div class="col-md-3 col-sm-6">

                    <h4>Contacto</h4>

                    <p><strong>Calle 47b</strong>
                        <br>866
                        <br>Por calle 102 y 100-2
                        <br>97302
                        <br>Merida
                        <br>
                        <strong>Yucatan, Mexico</strong>
                    </p>

                    <a href="/Fcontacto" class="btn btn-small btn-template-main">Ir a la pagina de Contacto</a>

                    <hr class="hidden-md hidden-lg hidden-sm">

                </div>
                <!-- /.col-md-3 -->



               
                <!-- /.col-md-3 -->
            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->

        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2017. PH3 Development Corporation</p>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>

                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="/fcss/js/jquery.cookie.js"></script>
    <script src="/fcss/js/waypoints.min.js"></script>
    <script src="/fcss/js/jquery.counterup.min.js"></script>
    <script src="/fcss/js/jquery.parallax-1.1.3.js"></script>
    <script src="/fcss/js/front.js"></script>

    

    <!-- owl carousel -->
    <script src="fcss/js/owl.carousel.min.js"></script>



</body>

</html>