@extends('layouts.app')

@section('main-content')
<div class="container">

    <h1>Imagen del Diplomado</h1>


    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr><th> Nombre del Diplomado</th><td> {{ $diplomados1->nombreDiplomado }} </td>
            </tbody>
        </table>
    </div>


        <div align="center" class="row" >
            <div class="col-md-10 col-md-offset-1">
            <img src="/uploads/diplomados/{{$diplomados1->imagen_diplomado}}" style="width:900px; height:400px; float:left; margin-right:25px;">
            </div>

            </div>
<p></p>
            <div align="center">               
                <form enctype="multipart/form-data" action="/imagen_diplomado" method="POST">
                <h3>Actualizar Imagen</h3>
                <input type="hidden" name="id" value="{{ $diplomados1->id }}">
                <input type="file" name="imagen_diplomado">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p></p>
                <input type="submit" value="Guardar" class="pull-center btn btn-lg btn-primary">
            </form>

            </div> 
</div>

</div>






</div>
@endsection