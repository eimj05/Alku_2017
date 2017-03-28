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
    <link href="fcss/css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="fcss/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="fcss/css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="fcss/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="fcss/img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="fcss/img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="fcss/img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="fcss/img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="fcss/img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="fcss/img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="fcss/img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="fcss/img/apple-touch-icon-152x152.png" />
    <!-- owl carousel css -->

    <link href="fcss/css/owl.carousel.css" rel="stylesheet">
    <link href="fcss/css/owl.theme.css" rel="stylesheet">
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
                      <!--  <div class="col-xs-7">
                            <div class="social">
                                <a href="#" class="external facebook" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="external gplus" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a>
                                <a href="#" class="external twitter" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a>
                                <a href="#" class="email" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a>
                            </div>
-->
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
                                <img src="fcss/img/logo.png" alt="Universal logo" class="hidden-xs hidden-sm">
                                <img src="fcss/img/logo-small.png" alt="Universal logo" class="visible-xs visible-sm"><span class="sr-only">Universal - go to homepage</span>
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
                               <!-- <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Caracteristicas<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="fcss/img/template-easy-customize.png" class="img-responsive hidden-xs" alt="">
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Shortcodes</h5>
                                                        <ul>
                                                            <li><a href="template-accordions.html">Accordions</a>
                                                            </li>
                                                            <li><a href="template-alerts.html">Alerts</a>
                                                            </li>
                                                            <li><a href="template-buttons.html">Buttons</a>
                                                            </li>
                                                            <li><a href="template-content-boxes.html">Content boxes</a>
                                                            </li>
                                                            <li><a href="template-blocks.html">Horizontal blocks</a>
                                                            </li>
                                                            <li><a href="template-pagination.html">Pagination</a>
                                                            </li>
                                                            <li><a href="template-tabs.html">Tabs</a>
                                                            </li>
                                                            <li><a href="template-typography.html">Typography</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Header variations</h5>
                                                        <ul>
                                                            <li><a href="template-header-default.html">Default sticky header</a>
                                                            </li>
                                                            <li><a href="template-header-nosticky.html">No sticky header</a>
                                                            </li>
                                                            <li><a href="template-header-light.html">Light header</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>-->
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portafolio <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <img src="fcss/img/template-homepage.png" class="img-responsive hidden-xs" alt="">
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
                                <!-- ========== FULL WIDTH MEGAMENU ================== 
                                <li class="dropdown use-yamm yamm-fw">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">All Pages <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <h5>Home</h5>
                                                        <ul>
                                                            <li><a href="index.html">Option 1: Default Page</a>
                                                            </li>
                                                            <li><a href="index2.html">Option 2: Application</a>
                                                            </li>
                                                            <li><a href="index3.html">Option 3: Startup</a>
                                                            </li>
                                                            <li><a href="index4.html">Option 4: Agency</a>
                                                            </li>
                                                            <li><a href="index5.html">Option 5: Portfolio</a>
                                                            </li>
                                                        </ul>
                                                        <h5>About</h5>
                                                        <ul>
                                                            <li><a href="about.html">About us</a>
                                                            </li>
                                                            <li><a href="team.html">Our team</a>
                                                            </li>
                                                            <li><a href="team-member.html">Team member</a>
                                                            </li>
                                                            <li><a href="services.html">Services</a>
                                                            </li>
                                                        </ul>
                                                        <h5>Marketing</h5>
                                                        <ul>
                                                            <li><a href="packages.html">Packages</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Portfolio</h5>
                                                        <ul>
                                                            <li><a href="portfolio-2.html">2 columns</a>
                                                            </li>
                                                            <li><a href="portfolio-no-space-2.html">2 columns with negative space</a>
                                                            </li>
                                                            <li><a href="portfolio-3.html">3 columns</a>
                                                            </li>
                                                            <li><a href="portfolio-no-space-3.html">3 columns with negative space</a>
                                                            </li>
                                                            <li><a href="portfolio-4.html">4 columns</a>
                                                            </li>
                                                            <li><a href="portfolio-no-space-4.html">4 columns with negative space</a>
                                                            </li>
                                                            <li><a href="portfolio-detail.html">Portfolio - detail</a>
                                                            </li>
                                                            <li><a href="portfolio-detail-2.html">Portfolio - detail 2</a>
                                                            </li>
                                                        </ul>
                                                        <h5>User pages</h5>
                                                        <ul>
                                                            <li><a href="customer-register.html">Register / login</a>
                                                            </li>
                                                            <li><a href="customer-orders.html">Orders history</a>
                                                            </li>
                                                            <li><a href="customer-order.html">Order history detail</a>
                                                            </li>
                                                            <li><a href="customer-wishlist.html">Wishlist</a>
                                                            </li>
                                                            <li><a href="customer-account.html">Customer account / change password</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Shop</h5>
                                                        <ul>
                                                            <li><a href="shop-category.html">Category - sidebar right</a>
                                                            </li>
                                                            <li><a href="shop-category-left.html">Category - sidebar left</a>
                                                            </li>
                                                            <li><a href="shop-category-full.html">Category - full width</a>
                                                            </li>
                                                            <li><a href="shop-detail.html">Product detail</a>
                                                            </li>
                                                        </ul>
                                                        <h5>Shop - order process</h5>
                                                        <ul>
                                                            <li><a href="shop-basket.html">Shopping cart</a>
                                                            </li>
                                                            <li><a href="shop-checkout1.html">Checkout - step 1</a>
                                                            </li>
                                                            <li><a href="shop-checkout2.html">Checkout - step 2</a>
                                                            </li>
                                                            <li><a href="shop-checkout3.html">Checkout - step 3</a>
                                                            </li>
                                                            <li><a href="shop-checkout4.html">Checkout - step 4</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <h5>Contact</h5>
                                                        <ul>
                                                            <li><a href="contact.html">Contact</a>
                                                            </li>
                                                            <li><a href="contact2.html">Contact - version 2</a>
                                                            </li>
                                                            <li><a href="contact3.html">Contact - version 3</a>
                                                            </li>
                                                        </ul>
                                                        <h5>Pages</h5>
                                                        <ul>
                                                            <li><a href="text.html">Text page</a>
                                                            </li>
                                                            <li><a href="text-left.html">Text page - left sidebar</a>
                                                            </li>
                                                            <li><a href="text-full.html">Text page - full width</a>
                                                            </li>
                                                            <li><a href="faq.html">FAQ</a>
                                                            </li>
                                                            <li><a href="404.html">404 page</a>
                                                            </li>
                                                        </ul>
                                                        <h5>Blog</h5>
                                                        <ul>
                                                            <li><a href="blog.html">Blog listing big</a>
                                                            </li>
                                                            <li><a href="blog-medium.html">Blog listing medium</a>
                                                            </li>
                                                            <li><a href="blog-small.html">Blog listing small</a>
                                                            </li>
                                                            <li><a href="blog-post.html">Blog Post</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </li>
                                    </ul>
                                </li>
                                <! ========== FULL WIDTH MEGAMENU END ================== -->

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


        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">Customer login</h4>
                    </div>
                    <div class="modal-body">
                        <form action="customer-orders.html" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <button class="btn btn-template-main"><i class="fa fa-sign-in"></i> Log in</button>
                            </p>

                        </form>

                        <p class="text-center text-muted">Not registered yet?</p>
                        <p class="text-center text-muted"><a href="customer-register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                    </div>
                </div>
            </div>
        </div>

        <!-- *** LOGIN MODAL END *** -->

        <div id="heading-breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Portafolio de Diplomados</h1>
                    </div>
                    <div class="col-md-5">
                        <ul class="breadcrumb">
                            <li><a href="/">Inicio</a>
                            </li>
                            <li>Diplomados</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="content">
            <div class="container">

                <section>

                    <div class="row">
                        <div class="col-md-12">

                            @if(Session::has('message'))
                              <div class="alert alert-info">
                              {{Session::get('message')}}
                              </div>
                              @endif
                              

                            <div class="heading">
                                <h2>Diplomados</h2>
                            </div>

                            <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                                ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                        </div>
                    </div>

       <!-- *** Listar Cursos *** -->

        <div class="container">
      <div class="input-group"> <span class="input-group-addon">Buscar</span>
        <input id="filtrar" type="text" class="form-control" placeholder="Filtra por tus preferencias y dale clic en Ver Detalles para mas informacion">
      </div>



        <table class="table table-hover">
        <thead>
          <tr>
            <th>Nº</th>
            <th>Nombre del Diplomado</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>            
            <th>Categoria</th>
            <th>Detalles</th>
          </tr>

        </thead>
        <tbody class="buscar">

         {{-- */$x=0;/* --}}
            @foreach($diplomados1 as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>{{ $item->nombreDiplomado }}</td><td>{{ $item->fechaInicio }}</td><td>{{ $item->fechaFin }}</td>

                    <td>@foreach($cats as $cat )
                         @if($item->interes == $cat->id)
                           {{ $cat->tipoInteres  }}
                        @endif
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ url('/Fdiplomadosdetalle/' . $item->id) }}" class="text-center" title="Ver Detalles"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>

    </div>




            </div>
            <!-- /.container -->

           
        <!-- /#content -->

        <!-- *** GET IT ***
_________________________________________________________ -->

        <div id="get-it">
            <div class="container">
                <div class="col-md-8 col-sm-12">
                    <h3>¿Te gustaria unirte a nuestro equipo y publicar tus Cursos o Diplomados?</h3>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a href="#" class="btn btn-template-transparent-primary">Envianos un email</a>
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

                    <p>Somos una empresa joven, que ofrece la plataforma "Alku" para la difusion de Cursos, Diplomados y Convocatorias. </p>


                    
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

                    <a href="contact.html" class="btn btn-small btn-template-main">Ir a la pagina de Contacto</a>

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

    <script src="js/jquery.cookie.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/front.js"></script>

    
    <script type="text/javascript">
        $(document).ready(function () {
            (function ($) {
                $('#filtrar').keyup(function () {
                    var rex = new RegExp($(this).val(), 'i');
                    $('.buscar tr').hide();
                    $('.buscar tr').filter(function () {
                        return rex.test($(this).text());
                    }).show();
                })
            }(jQuery));
        });
    </script>    



    <!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>



</body>

</html>