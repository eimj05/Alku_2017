@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Imagen del Curso</h1>


    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr><th> Nombre del Curso</th><td> {{ $cursos1->nombreCurso }} </td>
            </tbody>
        </table>
    </div>


        <div class="row" >
            <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/cursos/{{$cursos1->imagen_curso}}" style="width:800px; height:400px; float:left; margin-right:25px;">
            </div>

            </div>
<p></p>
            <div>               
                <form enctype="multipart/form-data" action="/imagen_curso" method="POST">
                <label> Actualizar Imagen</label>
                <input type="hidden" name="id" value="{{ $cursos1->id }}">
                <input type="file" name="imagen_curso">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>

            </div> 
</div>

</div>






</div>
@endsection