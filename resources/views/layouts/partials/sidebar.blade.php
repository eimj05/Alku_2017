<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/uploads/avatars/{{ Auth::user()->avatar }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) 
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menú</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='glyphicon glyphicon-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>

            <li class="treeview">
                <a href="#"><i class='glyphicon glyphicon-globe'></i> <span>Administracion</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                       <li><a href="{{ url('Usuarios') }}"><i class='fa  fa-users'></i> <span>{{ trans('Usuarios') }}</span></a></li>
                        <li><a href="{{ url('Intereses') }}"><i class='glyphicon glyphicon-road'></i> <span>{{ trans('adminlte_lang::message.anotherlink5') }}</span></a></li>
                        <li><a href="{{ url('Roles') }}"><i class='glyphicon glyphicon-briefcase'></i> <span>{{ trans('Roles') }}</span></a></li>
                        
                </ul>

            <li><a href="{{ url('Cursos') }}"><i class='glyphicon glyphicon-pencil'></i> <span>{{ trans('adminlte_lang::message.anotherlink4') }}</span></a></li>
            <li><a href="{{ url('Diplomados') }}"><i class='glyphicon glyphicon-book'></i> <span>{{ trans('adminlte_lang::message.anotherlink1') }}</span></a></li>
            <li><a href="{{ url('Convocatorias') }}"><i class='glyphicon glyphicon-bullhorn'></i> <span>{{ trans('adminlte_lang::message.anotherlink3') }}</span></a></li>
            <li><a href="{{ url('Ubicaciones') }}"><i class='fa fa-map-marker'></i> <span>{{ trans('Ubicaciones') }}</span></a></li>
            <li><a href="{{ url('Enviaremail') }}"><i class="fa fa-fw fa-envelope"></i> <span>Enviar Email</span></a></li>

            


          <!--  {{--<li><a href="{{ url('diplomados') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink1') }}</span></a></li>--}}
            {{--<li><a href="{{ url('cliente/cliente') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink2') }}</span></a></li>--}}
            {{--<li><a href="{{ url('convocatoria/convocatoriaa') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink3') }}</span></a></li>--}}-->
           
           
            
            
           <!--  <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li> -->
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
