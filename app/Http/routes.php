<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
   return view('welcome');
});


 ////-----  FrontEnd  ------//////

  

    Route::get('FCursosinfo', function (){
        return view('frontend.cursosinfo'); 
    });

    Route::get('FDiplomadosinfo', function (){
        return view('frontend.diplomadosinfo'); 
    });

    Route::get('FConvocatoriasinfo', function (){
        return view('frontend.convocatoriasinfo'); 
    });

    Route::get('Fcontacto', function (){
        return view('frontend.contacto'); 
    });

    Route::get('Facerca', function (){
        return view('frontend.acerca'); 
    });

    Route::get('Fservicios', function (){
        return view('frontend.fservicios'); 
    });

    Route::get('Fperfil', function (){
        return view('frontend.perfil'); 
    });


   Route::get('Fcursoslist', 'FrontendController@cursosindex');
   Route::get('Fcursosdetalle/{cursos1}', 'FrontendController@cursosshow');



   Route::get('Fdiplomadoslist', 'FrontendController@diplomadosindex');
   Route::get('Fdiplomadosdetalle/{diplomados1}', 'FrontendController@diplomadosshow');



   Route::get('Fconvocatoriaslist', 'FrontendController@convocatoriasindex');
   Route::get('Fconvocatoriasdetalle/{convocatorias1}', 'FrontendController@convocatoriasshow');

  


  // Formulario de Contato
    

    Route::resource('fmail', 'FmailController');

    

    Route::group(['middleware' => 'auth'], function(){
    Route::auth();
     Route::get('/home', 'HomeController@index');
     Route::get('/nogrants', 'HomeController@nogrant');


    ////-----  AVATAR  ------//////

     Route::get('Usuarios/fotoperfil', [
        'uses' => 'Cliente\ClienteController@profile',
        'as' => 'cliente.cliente.profile',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

     Route::post('profile', 'Cliente\ClienteController@update_avatar');

     Route::post('imagen_curso', 'Curso1\Cursos1Controller@update_imagen');

     Route::post('imagen_diplomado', 'Diplomado1\Diplomados1Controller@update_imagen');

     Route::post('imagen_convocatoria', 'Convocatoria1\Convocatoria1Controller@update_imagen');
     
     
     ////-----  INSCRIPCIONES  ------//////

     // CURSOS

     Route::get('ICursos/{cursos1}', [
        'uses' => 'InscripcionesController@showcursos',
        'as' => 'curso1.cursos1.inscritos',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

     Route::delete('ICursos/{cursos1}/{cursos2}', [
        'uses' => 'InscripcionesController@destroycursos',
        'as' => 'curso1.cursos1.destroy',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);


      Route::get('Cinscripcion', [
        'uses' => 'FinscripcioncursoController@store',
        'as' => 'cinscripcion',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa','RegUser']
        ]);

     // DIPLOMADOS
      Route::get('IDiplomados/{diplomados1}', [
        'uses' => 'InscripcionesController@showdiplomados',
        'as' => 'diplomado1.diplomados1.inscritos',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

     Route::delete('IDiplomados/{diplomados1}/{diplomados2}', [
        'uses' => 'InscripcionesController@destroydiplomados',
        'as' => 'diplomado1.diplomados1.destroy',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

     Route::get('Dinscripcion', [
        'uses' => 'FinscripciondiplomadoController@store',
        'as' => 'dinscripcion',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa','RegUser']
        ]);
    

     ////-----  USUARIOS  ------//////


    Route::get('Usuarios', [
        'uses' => 'Cliente\ClienteController@index',
        'as' => 'cliente.cliente.index',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

    Route::post('Usuarios', [
        'uses' => 'Cliente\ClienteController@store',
        'as' => 'cliente.cliente.store',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

    Route::get('Usuarios/create', [
        'uses' => 'Cliente\ClienteController@create',
        'as' => 'cliente.cliente.create',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

     Route::patch('Usuarios/{cliente}', [
        'uses' => 'Cliente\ClienteController@update',
        'as' => 'cliente.cliente.update',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

     Route::delete('Usuarios/{cliente}', [
        'uses' => 'Cliente\ClienteController@destroy',
        'as' => 'cliente.cliente.destroy',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

    Route::get('Usuarios/{cliente}', [
        'uses' => 'Cliente\ClienteController@show',
        'as' => 'cliente.cliente.show',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

    Route::get('Usuarios/{cliente}/edit', [
        'uses' => 'Cliente\ClienteController@edit',
        'as' => 'cliente.cliente.edit',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

    // Perfil de Usuario

    Route::get('Usuarios/{cliente}/editperfil', [
        'uses' => 'Cliente\ClienteController@editperfil',
        'as' => 'cliente.cliente.perfil',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);


    Route::patch('Perfil/{cliente}', [
        'uses' => 'Cliente\ClienteController@updateperfil',
        'as' => 'cliente.cliente.update',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

////-----  INTERESES  ------//////

    Route::get('Intereses', [
        'uses' => 'Interes1\Intereses1Controller@index',
        'as' => 'interes1.intereses1.index',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

    Route::post('Intereses', [
        'uses' => 'Interes1\Intereses1Controller@store',
        'as' => 'interes1.intereses1.store',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

    Route::get('Intereses/create', [
        'uses' => 'Interes1\Intereses1Controller@create',
        'as' => 'interes1.intereses1.create',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

     Route::patch('Intereses/{intereses1}', [
        'uses' => 'Interes1\Intereses1Controller@update',
        'as' => 'interes1.intereses1.update',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

     Route::delete('Intereses/{intereses1}', [
        'uses' => 'Interes1\Intereses1Controller@destroy',
        'as' => 'interes1.intereses1.destroy',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

    Route::get('Intereses/{intereses1}', [
        'uses' => 'Interes1\Intereses1Controller@show',
        'as' => 'interes1.intereses1.show',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

    Route::get('Intereses/{intereses1}/edit', [
        'uses' => 'Interes1\Intereses1Controller@edit',
        'as' => 'interes1.intereses1.edit',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

////-----  ROLES  ------//////

    Route::get('Roles', [
        'uses' => 'Roles1\Roles1Controller@index',
        'as' => 'roles1.roles1.index',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

    Route::post('Roles', [
        'uses' => 'Roles1\Roles1Controller@store',
        'as' => 'roles1.roles1.store',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

    Route::get('Roles/create', [
        'uses' => 'Roles1\Roles1Controller@create',
        'as' => 'roles1.roles1.create',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

     Route::patch('Roles/{roles1}', [
        'uses' => 'Roles1\Roles1Controller@update',
        'as' => 'roles1.roles1.update',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

     Route::delete('Roles/{roles1}', [
        'uses' => 'Roles1\Roles1Controller@destroy',
        'as' => 'roles1.roles1.destroy',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

    Route::get('Roles/{roles1}', [
        'uses' => 'Roles1\Roles1Controller@show',
        'as' => 'roles1.roles1.show',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

    Route::get('Roles/{roles1}/edit', [
        'uses' => 'Roles1\Roles1Controller@edit',
        'as' => 'roles1.roles1.edit',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

////-----  CURSOS  ------//////


    Route::get('Cursos', [
        'uses' => 'Curso1\Cursos1Controller@index',
        'as' => 'curso1.cursos1.index',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

    Route::post('Cursos', [
        'uses' => 'Curso1\Cursos1Controller@store',
        'as' => 'curso1.cursos1.store',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

    Route::get('Cursos/create', [
        'uses' => 'Curso1\Cursos1Controller@create',
        'as' => 'curso1.cursos1.create',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

     Route::patch('Cursos/{cursos1}', [
        'uses' => 'Curso1\Cursos1Controller@update',
        'as' => 'curso1.cursos1.update',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

     Route::delete('Cursos/{cursos1}', [
        'uses' => 'Curso1\Cursos1Controller@destroy',
        'as' => 'curso1.cursos1.destroy',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

    Route::get('Cursos/{cursos1}', [
        'uses' => 'Curso1\Cursos1Controller@show',
        'as' => 'curso1.cursos1.show',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

    Route::get('Cursos/{cursos1}/edit', [
        'uses' => 'Curso1\Cursos1Controller@edit',
        'as' => 'curso1.cursos1.edit',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

    Route::get('Cursos/{cursos1}/imagen', [
        'uses' => 'Curso1\Cursos1Controller@imagen',
        'as' => 'curso1.cursos1.imagen',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

    Route::get('Cursos/{cursos1}/ubicacion', [
        'uses' => 'UbicacionController@index',
        'as' => 'ubicacion.index',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

    

////-----  DIPLOMADOS  ------//////

    Route::get('Diplomados', [
        'uses' => 'Diplomado1\Diplomados1Controller@index',
        'as' => 'diplomado1.diplomados1.index',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

    Route::post('Diplomados', [
        'uses' => 'Diplomado1\Diplomados1Controller@store',
        'as' => 'diplomado1.diplomados1.store',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

    Route::get('Diplomados/create', [
        'uses' => 'Diplomado1\Diplomados1Controller@create',
        'as' => 'diplomado1.diplomados1.create',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

     Route::patch('Diplomados/{diplomados1}', [
        'uses' => 'Diplomado1\Diplomados1Controller@update',
        'as' => 'diplomado1.diplomados1.update',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

     Route::delete('Diplomados/{diplomados1}', [
        'uses' => 'Diplomado1\Diplomados1Controller@destroy',
        'as' => 'diplomado1.diplomados1.destroy',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

    Route::get('Diplomados/{diplomados1}', [
        'uses' => 'Diplomado1\Diplomados1Controller@show',
        'as' => 'diplomado1.diplomados1.show',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

    Route::get('Diplomados/{diplomados1}/edit', [
        'uses' => 'Diplomado1\Diplomados1Controller@edit',
        'as' => 'diplomado1.diplomados1.edit',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

     Route::get('Diplomados/{diplomados1}/imagen', [
        'uses' => 'Diplomado1\Diplomados1Controller@imagen',
        'as' => 'diplomado1.diplomados1.imagen',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);


////-----  CONVOCATORIAS  ------//////

    Route::get('Convocatorias', [
        'uses' => 'Convocatoria1\Convocatoria1Controller@index',
        'as' => 'convocatoria1.convocatoria1.index',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

    Route::post('Convocatorias', [
        'uses' => 'Convocatoria1\Convocatoria1Controller@store',
        'as' => 'convocatoria1.convocatoria1.store',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

    Route::get('Convocatorias/create', [
        'uses' => 'Convocatoria1\Convocatoria1Controller@create',
        'as' => 'convocatoria1.convocatoria1.create',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

     Route::patch('Convocatorias/{convocatoria1}', [
        'uses' => 'Convocatoria1\Convocatoria1Controller@update',
        'as' => 'convocatoria1.convocatoria1.update',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

     Route::delete('Convocatorias/{convocatoria1}', [
        'uses' => 'Convocatoria1\Convocatoria1Controller@destroy',
        'as' => 'convocatoria1.convocatoria1.destroy',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

    Route::get('Convocatorias/{convocatoria1}', [
        'uses' => 'Convocatoria1\Convocatoria1Controller@show',
        'as' => 'convocatoria1.convocatoria1.show',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

    Route::get('Convocatorias/{convocatoria1}/edit', [
        'uses' => 'Convocatoria1\Convocatoria1Controller@edit',
        'as' => 'convocatoria1.convocatoria1.edit',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

    Route::get('Convocatorias/{convocatoria1}/imagen', [
        'uses' => 'Convocatoria1\Convocatoria1Controller@imagen',
        'as' => 'convocatoria1.convocatoria1.imagen',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);

    


    // UBICACION

        Route::post('Ubicaciones/create', 'UbicacionController@store');
    
        Route::get('Ubicaciones/create', [
        'uses' => 'UbicacionController@create',
        'as' => 'ubicacion.create',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);


    Route::get('Ubicaciones', [
        'uses' => 'UbicacionController@index',
        'as' => 'ubicacion.index',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);
    
    Route::delete('Ubicaciones/{ubicacion}', [
        'uses' => 'UbicacionController@destroy',
        'as' => 'ubicacion.destroy',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

    Route::get('Ubicaciones/{ubicacion}', [
        'uses' => 'UbicacionController@show',
        'as' => 'ubicacion.show',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);




    //Mail
    Route::resource('mail', 'MailController');


    Route::get('Enviaremail', [
        'uses' => 'HomeController@contacto',
        'as' => 'contacto',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);


	//PDF

    Route::get('/pdfusuarios', [
        'uses' => 'Cliente\ClienteController@pdf',
        'as' => 'cliente.cliente.index',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

      Route::get('/pdfcursos', [
        'uses' => 'Curso1\Cursos1Controller@pdf',
        'as' => 'curso1.cursos1.index',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);


      Route::get('/pdfdiplomados', [
        'uses' => 'Diplomado1\Diplomados1Controller@pdf',
        'as' => 'diplomado1.diplomados1.index',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

       Route::get('/pdfconvocatorias', [
        'uses' => 'Convocatoria1\Convocatoria1Controller@pdf',
        'as' => 'convocatoria1.convocatoria1.index',
        'middleware' => 'roles',
        'roles' => ['Admin','Empresa']
        ]);

});














	