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


        <div align="center" class="row" >
            <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/cursos/{{$cursos1->imagen_curso}}" style="width:900px; height:400px; float:left; margin-right:25px;">
            </div>

            </div>
<p></p>
            <div align="center">               
                <form enctype="multipart/form-data" action="/imagen_curso" method="POST">
                <h4>Actualizar Imagen</h4>
                <input type="hidden" name="id" value="{{ $cursos1->id }}">
                <input type="file" name="imagen_curso">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p></p>

                 <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                </div>
            </form>

            </div> 
</div>

</div>






</div>
@endsection